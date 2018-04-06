<?php

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\ClassName;

use Zored\Telegram\Implementation\Schema\Entity\EntityInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Internal\ClassNameFixer;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Internal\ClassNameFixerInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Internal\InternalEntityCheckerInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\ClassType\ClassTypeBuilder;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\ClassType\ClassTypeBuilderInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema;
use const DIRECTORY_SEPARATOR;
use function array_slice;

final class EntityClassNameBuilder implements EntityClassNameBuilderInterface
{
    private const CLASS_GLUE = '\\';
    private const PHP_EXTENSION = '.php';

    /**
     * @var string
     */
    private $rootNamespace;

    /**
     * @var ClassTypeBuilderInterface
     */
    private $classTypeBuilder;

    /**
     * @var ClassNameFixerInterface
     */
    private $classNameFixer;

    /**
     * @param string $rootNamespace
     */
    public function __construct(
        ClassTypeBuilderInterface $classTypeBuilder = null,
        ClassNameFixerInterface $classNameFixer = null,
        string $rootNamespace = Schema::class
    )
    {
        $this->rootNamespace = $rootNamespace;
        $this->classTypeBuilder = $classTypeBuilder ?? new ClassTypeBuilder();
        $this->classNameFixer = $classNameFixer ?? new ClassNameFixer();
    }

    public function buildNamespace(EntityInterface $entity): string
    {
        $parts = $this->getParts($entity);
        array_pop($parts);
        $parts = array_merge([$this->rootNamespace], $this->getRootNamespaceParts($entity), $parts);

        return implode(self::CLASS_GLUE, $parts);
    }

    public function buildName(EntityInterface $entity): string
    {
        $parts = $this->getParts($entity);
        $parts = array_merge([$this->rootNamespace], $this->getRootNamespaceParts($entity), $parts);

        return implode(self::CLASS_GLUE, $parts);
    }

    public function buildShortName(EntityInterface $entity): string
    {
        $parts = $this->getParts($entity);

        return end($parts);
    }

    public function buildPath(EntityInterface $entity): string
    {
        $parts = $this->getParts($entity);

        return implode(DIRECTORY_SEPARATOR, $parts).self::PHP_EXTENSION;
    }

    /**
     * @param EntityInterface $entity
     * @return array
     */
    protected function getParts(EntityInterface $entity): array
    {
        $parts = $entity->getRelativeName();
        $parts = array_map('ucfirst', $parts);
        $this->addPostfix($parts, $entity);
        $name = array_pop($parts);
        $this->classNameFixer->fix($name);
        $parts[] = $name;
        return $parts;
    }

    private function getRootNamespaceParts(EntityInterface $entity): array
    {
        $parts = explode(self::CLASS_GLUE, \get_class($entity));

        return array_slice($parts, -2);
    }

    private function addPostfix(array &$parts, EntityInterface $entity): void
    {
        if ($this->classTypeBuilder->build($entity) !== ClassTypeBuilderInterface::TYPE_INTERFACE) {
            return;
        }

        $last = array_pop($parts);
        $last .= 'Interface';
        $parts[] = $last;
    }
}
