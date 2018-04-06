<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver;

use League\Flysystem\Adapter\Local;
use League\Flysystem\Filesystem;
use Nette\PhpGenerator\PhpNamespace;
use Zored\Telegram\Implementation\Schema\Entity\Type;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\ClassName\EntityClassNameBuilder;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\ClassName\EntityClassNameBuilderInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Writer\FileWriter;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Writer\FileWriterInterface;

final class TypeSaver
{
    /**
     * @var FileWriterInterface
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

    public function __construct(
        FileWriterInterface $writer = null,
        EntityClassNameBuilderInterface $classNameBuilder = null,
        string $documentationRoot = 'https://core.telegram.org/type/'
    ) {
        $this->writer = $writer ?? new FileWriter(new Filesystem(new Local(__DIR__ . '/../../Entity/Type/')));
        $this->documentationRoot = $documentationRoot;
        $this->nameBuilder = $classNameBuilder ?? new EntityClassNameBuilder();
    }

    public function save(Type $type): void
    {
        $this->writer->rewrite(
            $this->nameBuilder->buildPath($type),
            $this->getFileContents($type)
        );
    }

    private function getFileContents(Type $type): string
    {
        $className = $this->nameBuilder->buildName($type);
        $namespace = new PhpNamespace($className->getNamespace());

        // Add type interface:
        $namespace
            ->addInterface($className->getShort())
            ->addComment("@link {$this->documentationRoot}{$type->getName()}");

        return EntitySaver::FILE_START . $namespace->__toString();
    }
}
