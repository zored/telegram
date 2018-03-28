<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator;

use Zored\Telegram\Implementation\Schema\Parameter;
use Zored\Telegram\Implementation\Schema\Type\AbstractClassType;
use Zored\Telegram\Implementation\Schema\Type\BaseType;
use Zored\Telegram\Implementation\Schema\Type\ClassType;
use Zored\Telegram\Implementation\Schema\Type\InterfaceType;
use Zored\Telegram\Implementation\Schema\Type\TypeInterface;
use const DIRECTORY_SEPARATOR;
use function array_unshift;
use function file_put_contents;
use function mkdir;
use function preg_split;

final class TypesGenerator implements TypesGeneratorInterface
{
    private const CLASS_GLUE = '\\';

    private $baseTypeMapping = [
        'long' => 'int',
        'Bool' => 'bool',
    ];

    private $rootNamespace = 'Zored\\Telegram\\Implementation\\Schema\\Types';

    private $rootNamespacePath = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'Types';

    public function generate(array $constructors): void
    {
        $types = $this->createEmptyTypes($constructors);
        $this->fillTypeParameters($constructors, $types);

        foreach ($types as $type) {
            $this->generateClass($type);
        }
    }

    private function getClassPartsByPredicate(string $predicate): array
    {
        $parts = preg_split('/[^\w]+/', $predicate);

        return array_map('ucfirst', $parts);
    }

    /**
     * @return ClassType[]
     */
    private function createEmptyTypes(array $constructors): array
    {
        /** @var ClassType[] $types */
        $types = [];
        foreach ($constructors as $constructor) {
            $predicate = $this->unifyTypeName($constructor['predicate']);
            $types[$predicate] = (new ClassType())
                ->setClassParts($this->getClassPartsByPredicate($predicate))
                ->setName($predicate);

            $interface = $this->unifyTypeName($constructor['type']);
            $types[$interface] = $types[$interface] ?? (new InterfaceType())
                    ->setClassParts($this->getClassPartsByPredicate($interface));
        }

        return $types;
    }

    /**
     * @param array $constructors
     *
     * @return array[]
     */
    private function getParamsByPredicate(array $constructors): array
    {
        /** @var array[] $paramsByPredicate */
        $paramsByPredicate = [];
        foreach ($constructors as $constructor) {
            $predicate2 = $constructor['predicate'];
            $paramsByPredicate[$predicate2] = $constructor['params'];
        }

        return $paramsByPredicate;
    }

    /**
     * @param ClassType[] $types
     */
    private function fillTypeParameters(array $constructors, array $types): void
    {
        $paramsByPredicate = $this->getParamsByPredicate($constructors);
        foreach ($paramsByPredicate as $predicate => $parameters) {
            $predicate = $this->unifyTypeName($predicate);
            foreach ($parameters as $parameter) {
                $parameterObject = $this->createParameter($types, $parameter);
                $types[$predicate]->addParameter($parameterObject);
            }
        }
    }

    private function createParameter(array $types, array $parameter): Parameter
    {
        $typeValue = $this->unifyTypeName($parameter['type']);
        $isArray = false;

        if (preg_match('/^vector<(?<type>.*)>$/', $typeValue, $matches)) {
            $typeValue = $matches['type'];
            $isArray = false;
        }

        $type = $types[$typeValue] ?? $this->createBaseType($typeValue);

        return (new Parameter())
            ->setName($parameter['name'])
            ->setIsArray($isArray)
            ->setType($type);
    }

    private function unifyTypeName(string $typeName): string
    {
        return lcfirst($typeName);
    }

    private function createBaseType(string $type): BaseType
    {
        $type = $this->baseTypeMapping[$type] ?? $type;

        return (new BaseType())->setName($type);
    }

    private function generateClass(AbstractClassType $type): void
    {
        $path = $this->getClassPath($type);

        $classParts = $type->getClassParts();
        $shortClass = array_pop($classParts);
        $namespace = implode(self::CLASS_GLUE, array_merge([$this->rootNamespace], $classParts));

        $properties = $methods = '';
        if ($type instanceof ClassType) {
            $properties = $this->getProperties($type);
            $methods = $this->getMethods($type);
        }

        $class = <<<PHP
<?php

namespace $namespace;

class $shortClass {
    $properties
    
    $methods
}
PHP;

        file_put_contents($path, $class);
    }

    private function createProperty(Parameter $parameter): string
    {
        $type = $this->getReturnType($parameter->getType());
        $name = $parameter->getName();

        return <<<PHP

    /**
     * @var $type
     */
    private \$$name;

PHP;
    }

    private function createAccessors(string $name, string $type, bool $isArray): string
    {
        $typeAnnotation = $type;
        if ($isArray) {
            $type = 'array';
            $typeAnnotation .= '[]';
        }

        return <<<PHP

    public function get$name(): $type
    {
        return \$this->$name;
    }

    /**
     * @var $typeAnnotation
     */
    public function set$name($type \$$name): self
    {
        \$this->$name = \$$name;
        return \$this;
    }

PHP;
    }

    private function getClassPath(AbstractClassType $type): string
    {
        $classParts = $type->getClassParts();
        $fileName = array_pop($classParts) . '.php';
        $directory = implode(DIRECTORY_SEPARATOR, array_merge([$this->rootNamespacePath], $classParts));

        if (!is_dir($directory)) {
            mkdir($directory, 0777, true);
            $directory = realpath($directory);
        }

        return $directory . DIRECTORY_SEPARATOR . $fileName;
    }

    private function getProperties(AbstractClassType $type): string
    {
        $properties = '';
        foreach ($type->getParameters() as $parameter) {
            $properties .= $this->createProperty($parameter);
        }

        return $properties;
    }

    private function getMethods(AbstractClassType $type): string
    {
        $methods = '';
        $toArray = '';
        foreach ($type->getParameters() as $parameter) {
            $type = $this->getReturnType($parameter->getType());
            $name = $parameter->getName();
            $methods .= $this->createAccessors($name, $type, $parameter->isArray());
            $toArray .= <<<PHP

            '$name' => \$this->get$name(),
PHP;
        }
        $methods .= <<<PHP
    
    public function toArray(): array
    {
        return [$toArray
        ];
    }
PHP;

        return $methods;
    }

    private function getReturnType(TypeInterface $type): string
    {
        if ($type instanceof BaseType) {
            return $type->getName();
        }

        if ($type instanceof AbstractClassType) {
            return $this->getFullClassName($type);
        }

        return '';
    }

    private function getFullClassName(AbstractClassType $type): string
    {
        $parts = $type->getClassParts();
        array_unshift($parts, $this->rootNamespace);

        return self::CLASS_GLUE . implode(self::CLASS_GLUE, $parts);
    }
}
