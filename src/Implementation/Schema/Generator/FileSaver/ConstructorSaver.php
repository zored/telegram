<?php

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver;

use League\Flysystem\Adapter\Local;
use League\Flysystem\Filesystem;
use League\Flysystem\FilesystemInterface;
use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\PhpNamespace;
use Zored\Telegram\Implementation\Schema\Entity\Constructor;
use Zored\Telegram\Implementation\Schema\Entity\EntityInterface;
use Zored\Telegram\Implementation\Schema\Entity\Parameter;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Accessor\AccessorBuilder;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Accessor\AccessorBuilderInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Internal\InternalEntityChecker;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Internal\InternalEntityCheckerInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\ClassName\EntityClassNameBuilder;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\ClassName\EntityClassNameBuilderInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\ClassType\ClassTypeBuilder;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\ClassType\ClassTypeBuilderInterface;

final class ConstructorSaver
{
    /**
     * @var FilesystemInterface
     */
    private $fileSystem;

    /**
     * @var string
     */
    private $documentationRoot;

    /**
     * @var EntityClassNameBuilderInterface
     */
    private $nameBuilder;

    /**
     * @var ClassTypeBuilderInterface
     */
    private $phpTypeBuilder;

    /**
     * @var AccessorBuilderInterface
     */
    private $accessorBuilder;

    /**
     * @var InternalEntityCheckerInterface
     */
    private $entityChecker;

    public function __construct(
        FilesystemInterface $fileSystem = null,
        EntityClassNameBuilderInterface $classNameBuilder = null,
        ClassTypeBuilderInterface $classTypeBuilder = null,
        AccessorBuilderInterface $accessorBuilder = null,
        InternalEntityCheckerInterface $internalEntityChecker = null,
        string $documentationRoot = 'https://core.telegram.org/constructor/'
    )
    {
        $this->fileSystem = $fileSystem ?? new Filesystem(new Local(__DIR__ . '/../../Entity/Constructor/'));
        $this->documentationRoot = $documentationRoot;
        $this->nameBuilder = $classNameBuilder ?? new EntityClassNameBuilder();
        $this->phpTypeBuilder = $classTypeBuilder ?? new ClassTypeBuilder();
        $this->accessorBuilder = $accessorBuilder ?? new AccessorBuilder();
        $this->entityChecker = $internalEntityChecker ?? new InternalEntityChecker();
    }

    public function save(Constructor $constructor): void
    {
        $path = $this->nameBuilder->buildPath($constructor);
        if ($this->fileSystem->has($path)) {
            $this->fileSystem->delete($path);
        }

        $this->fileSystem->write($path, $this->getFileContents($constructor));
    }

    private function getFileContents(Constructor $constructor): string
    {
        $namespace = new PhpNamespace($this->nameBuilder->buildNamespace($constructor));

        $class = $namespace
            ->addClass($this->nameBuilder->buildShortName($constructor))
            ->addComment("@link {$this->documentationRoot}{$constructor->getName()}")
            ->setFinal($constructor->getChild() === null)
            ->setConstants(['ID' => $constructor->getId()]);

        $parent = $this->updateParent($constructor, $class);

        foreach ($constructor->getParameters() as $parameter) {
            $this->addProperty($class, $parent, $parameter);
        }

        return '<?php' . PHP_EOL .PHP_EOL . $namespace->__toString();
    }

    private function addProperty(ClassType $class, ?EntityInterface $parent, Parameter $parameter): void
    {
        $name = $parameter->getName();

        // Do not create existing parameter.
        if ($parent && $parent->hasParameter($name)) {
            return;
        }

        // Property:
        $type = $this->nameBuilder->buildName($parameter->getType());
        $class
            ->addProperty($name)
            ->addComment("@var $type")
            ->setVisibility('private');

        // Getter:
        $class
            ->addMethod($this->accessorBuilder->build('get', $name))
            ->setVisibility('public')
            ->setReturnType($type)
            ->setBody('return $this->' . $name . ';');

        // Setter:
        $class
            ->addMethod($this->accessorBuilder->build('set', $name))
            ->setVisibility('public')
            ->setReturnType('self')
            ->setBody('return $this->' . $name . ';');
    }

    /**
     * @param Constructor $constructor
     * @param $class
     * @return EntityInterface
     */
    private function updateParent(Constructor $constructor, ClassType $class): EntityInterface
    {
        $parent = $constructor->getParent();
        if ($this->entityChecker->isInternal($parent)) {
            return $parent;
        }

        $parentClass = $this->nameBuilder->buildName($parent);
        switch ($this->phpTypeBuilder->build($parent)) {
            case ClassTypeBuilderInterface::TYPE_CLASS:
                $class->setExtends($parentClass);
                break;

            case ClassTypeBuilderInterface::TYPE_INTERFACE:
                $class->addImplement($parentClass);
                break;
        }
        return $parent;
    }

}
