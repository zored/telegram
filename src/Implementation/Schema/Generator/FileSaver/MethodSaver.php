<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver;

use League\Flysystem\Adapter\Local;
use League\Flysystem\Filesystem;
use League\Flysystem\FilesystemInterface;
use Nette\PhpGenerator\Constant;
use Nette\PhpGenerator\PhpNamespace;
use Zored\Telegram\Implementation\Schema\Entity\Method;
use Zored\Telegram\Implementation\Schema\Entity\Parameter;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\ClassName\EntityClassNameBuilder;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\ClassName\EntityClassNameBuilderInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Writer\FileWriter;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Writer\FileWriterInterface;

final class MethodSaver
{
    private const RESULT_PARAMETER_NAME = 'result';

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
        ParameterUpdaterInterface $parameterUpdater = null,
        string $documentationRoot = 'https://core.telegram.org/method/'
    ) {
        $this->writer = $writer ?? new FileWriter(new Filesystem(new Local(__DIR__ . '/../../Entity/Method/')));
        $this->documentationRoot = $documentationRoot;
        $this->nameBuilder = $classNameBuilder ?? new EntityClassNameBuilder();
        $this->idConstant = (new Constant('ID'))->setVisibility('public');
        $this->parameterUpdater = $parameterUpdater ?? new ParameterUpdater(null, $classNameBuilder);
    }

    public function save(Method $method): void
    {
        $this->writer->rewrite(
            $this->nameBuilder->buildPath($method),
            $this->getFileContents($method)
        );
    }

    private function getFileContents(Method $method): string
    {
        $className = $this->nameBuilder->buildName($method);
        $namespace = new PhpNamespace($className->getNamespace());

        $class = $namespace
            ->addClass($className->getShort())
            ->addComment("@link {$this->documentationRoot}{$method->getName()}")
            ->addComment('@codeCoverageIgnore')
            ->setConstants([$this->idConstant->setValue($method->getId())]);

        $parameters = $method->getParameters();
        $parameters[] = (new Parameter())
            ->setName(self::RESULT_PARAMETER_NAME)
            ->setType($method->getReturnType());

        $this->parameterUpdater->addParameters($class, $parameters, $namespace);

        return EntitySaver::FILE_START . $namespace->__toString();
    }
}
