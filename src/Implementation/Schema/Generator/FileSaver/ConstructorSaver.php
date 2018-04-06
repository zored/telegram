<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver;

use League\Flysystem\Adapter\Local;
use League\Flysystem\Filesystem;
use League\Flysystem\FilesystemInterface;
use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\Constant;
use Nette\PhpGenerator\PhpNamespace;
use Zored\Telegram\Implementation\Schema\Entity\Constructor;
use Zored\Telegram\Implementation\Schema\Entity\EntityInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\ClassName\EntityClassNameBuilder;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\ClassName\EntityClassNameBuilderInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\ClassType\ClassTypeBuilder;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\ClassType\ClassTypeBuilderInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Internal\InternalEntityChecker;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Internal\InternalEntityCheckerInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Writer\FileWriter;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Writer\FileWriterInterface;

final class ConstructorSaver
{
    /**
     * @var FilesystemInterface
     */
    private $writer;

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
     * @var InternalEntityCheckerInterface
     */
    private $entityChecker;

    /**
     * @var Constant
     */
    private $idConstant;

    /**
     * @var ParameterUpdaterInterface
     */
    private $parameterUpdater;

    public function __construct(
        FileWriterInterface $writer = null,
        EntityClassNameBuilderInterface $classNameBuilder = null,
        ClassTypeBuilderInterface $classTypeBuilder = null,
        InternalEntityCheckerInterface $internalEntityChecker = null,
        ParameterUpdaterInterface $parameterUpdater = null,
        string $documentationRoot = 'https://core.telegram.org/constructor/'
    ) {
        $this->writer = $writer ?? new FileWriter(new Filesystem(new Local(__DIR__ . '/../../Entity/Constructor/')));
        $this->documentationRoot = $documentationRoot;
        $this->nameBuilder = $classNameBuilder ?? new EntityClassNameBuilder();
        $this->phpTypeBuilder = $classTypeBuilder ?? new ClassTypeBuilder();
        $this->entityChecker = $internalEntityChecker ?? new InternalEntityChecker();
        $this->idConstant = (new Constant('ID'))->setVisibility('public');
        $this->parameterUpdater = $parameterUpdater ?? new ParameterUpdater(null, $classNameBuilder);
    }

    public function save(Constructor $constructor): void
    {
        $this->writer->rewrite(
            $this->nameBuilder->buildPath($constructor),
            $this->getFileContents($constructor)
        );
    }

    private function getFileContents(Constructor $constructor): string
    {
        $name = $this->nameBuilder->buildName($constructor);
        $namespace = new PhpNamespace($name->getNamespace());

        $class = $namespace
            ->addClass($name->getShort())
            ->addComment("@link {$this->documentationRoot}{$constructor->getName()}")
            ->addComment('@codeCoverageIgnore')
            ->setFinal(null === $constructor->getChild())
            ->setConstants([$this->idConstant->setValue($constructor->getId())]);

        $parent = $this->updateParent($constructor, $class, $namespace);

        $this->parameterUpdater->addParameters($class, $constructor->getParameters(), $namespace, $parent);

        return EntitySaver::FILE_START . $namespace->__toString();
    }

    /**
     * @param Constructor $constructor
     * @param $class
     *
     * @return EntityInterface
     */
    private function updateParent(Constructor $constructor, ClassType $class, PhpNamespace $namespace): EntityInterface
    {
        $parent = $constructor->getParent();
        if ($this->entityChecker->isInternal($parent)) {
            return $parent;
        }

        $parentClassName = $this->nameBuilder->buildName($parent);
        $namespace->addUse((string) $parentClassName);

        switch ($this->phpTypeBuilder->build($parent)) {
            case ClassTypeBuilderInterface::TYPE_CLASS:
                $class->setExtends($parentClassName->getFull());
                break;

            case ClassTypeBuilderInterface::TYPE_INTERFACE:
                $class->addImplement($parentClassName->getFull());
                break;
        }

        return $parent;
    }
}
