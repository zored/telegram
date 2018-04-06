<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver;

use Nette\InvalidStateException;
use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\PhpNamespace;
use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Entity\EntityInterface;
use Zored\Telegram\Implementation\Schema\Entity\Parameter;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Accessor\AccessorBuilder;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Accessor\AccessorBuilderInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\ClassName\ClassName;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\ClassName\EntityClassNameBuilder;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\ClassName\EntityClassNameBuilderInterface;

final class ParameterUpdater implements ParameterUpdaterInterface
{
    private const BASE_TYPE_HINTS = [
        'double' => 'float',
        'int' => 'int',
        'long' => 'int',
        'string' => 'string',
    ];

    /**
     * @var AccessorBuilderInterface
     */
    private $accessorBuilder;

    /**
     * @var EntityClassNameBuilderInterface
     */
    private $classNameBuilder;

    /**
     * @var string[]
     */
    private $uses = [];

    public function __construct(
        AccessorBuilderInterface $accessorBuilder = null,
        EntityClassNameBuilderInterface $classNameBuilder = null
    ) {
        $this->accessorBuilder = $accessorBuilder ?? new AccessorBuilder();
        $this->classNameBuilder = $classNameBuilder ?? new EntityClassNameBuilder();
    }

    public function addParameters(ClassType $class, array $parameters, PhpNamespace $namespace, EntityInterface $parent = null): void
    {
        $this->uses = [];

        foreach ($parameters as $parameter) {
            $this->addParameter($class, $parameter, $parent);
        }

        $this->applyUses($namespace);
    }

    private function addParameter(ClassType $class, Parameter $parameter, EntityInterface $parent = null): void
    {
        $name = $parameter->getName();

        // Do not create existing parameter.
        if ($parent && $parent->hasParameter($name)) {
            return;
        }

        // Property:
        $className = $this->classNameBuilder->buildName($parameter->getType());
        $this->uses[] = $fullClassName = $className->getFull();
        $type = $parameter->getType();
        $isArray = $type->isVector();
        $docTypeHint = $className->getShort() . ($isArray ? '[]' : '');
        $typeHint = $isArray ? 'array' : $fullClassName;

        $class
            ->addProperty($name)
            ->addComment("@var $docTypeHint")
            ->setVisibility('private');

        // Getter:
        $class
            ->addMethod($this->accessorBuilder->build('get', $name))
            ->setVisibility('public')
            ->setReturnType($typeHint)
            ->addComment("@return $docTypeHint")
            ->setBody('return $this->' . $name . ';');

        // Setter:
        // TODO: something bad is coming
        if (!$isArray) {
            $typeHint = self::BASE_TYPE_HINTS[$type->getName()] ?? $typeHint;
        }
        $setter = $class
            ->addMethod($this->accessorBuilder->build('set', $name))
            ->setVisibility('public')
            ->setReturnType('self')
            ->setBody($this->getSetterBody($name, $type));

        $setter
            ->addParameter($name)
            ->setTypeHint($typeHint);
    }

    private function getSetterBody(string $name, EntityInterface $type): string
    {
        return <<<PHP
\$this->$name = {$this->getSetterValue($name, $type)};

return \$this;
PHP;
    }

    private function getSetterValue(string $name, EntityInterface $type): string
    {
        $typeHint = self::BASE_TYPE_HINTS[$type->getName()] ?? null;
        if (!$typeHint) {
            return '$' . $name;
        }

        $typeClassName = $this->classNameBuilder->buildName($type);
        $parentClassName = ClassName::fromFull(AbstractBaseType::class);
        $this->uses[] = $parentClassName->getFull();
        $this->uses[] = $typeClassName->getFull();

        $value = <<<PHP
new class ($$name) extends {$parentClassName->getShort()} implements {$typeClassName->getShort()} {
}
PHP;

        if (!$type->isVector()) {
            return $value;
        }

        return <<<PHP
array_map(function($typeHint \$$name){
    return $value;
}, $$name)
PHP;
    }

    /**
     * @param PhpNamespace $namespace
     */
    private function applyUses(PhpNamespace $namespace): void
    {
        foreach (array_unique($this->uses) as $use) {
            if (!$use) {
                continue;
            }
            try {
                $namespace->addUse($use);
            } catch (InvalidStateException $alreadyExists) {
            }
        }
    }
}
