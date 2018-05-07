<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\ClassName;

use Zored\Telegram\Implementation\Schema\Entity\EntityInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\ClassType\ClassTypeBuilder;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\ClassType\ClassTypeBuilderInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Internal\ClassNameFixer;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Internal\ClassNameFixerInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema;
use Zored\Telegram\Util\String\StringCaseModifier;
use const DIRECTORY_SEPARATOR;
use function array_slice;

final class EntityClassNameBuilder implements EntityClassNameBuilderInterface
{
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
    ) {
        $this->rootNamespace = $rootNamespace;
        $this->classTypeBuilder = $classTypeBuilder ?? new ClassTypeBuilder();
        $this->classNameFixer = $classNameFixer ?? new ClassNameFixer();
    }

    public function buildName(EntityInterface $entity): ClassName
    {
        $parts = $this->getParts($entity);
        $parts = array_merge([$this->rootNamespace], $this->getRootNamespaceParts($entity), $parts);

        return ClassName::fromParts($parts);
    }

    public function buildPath(EntityInterface $entity): string
    {
        $parts = $this->getParts($entity);

        return implode(DIRECTORY_SEPARATOR, $parts) . self::PHP_EXTENSION;
    }

    /**
     * @param EntityInterface $entity
     *
     * @return array
     */
    private function getParts(EntityInterface $entity): array
    {
        $parts = $entity->getRelativeName();
        $parts = array_map([StringCaseModifier::class, 'toStudyCase'], $parts);
        $this->updateLastPart($parts, $entity);

        return $parts;
    }

    private function getRootNamespaceParts(EntityInterface $entity): array
    {
        $parts = explode(self::CLASS_GLUE, \get_class($entity));

        return array_slice($parts, -2);
    }

    private function updateLastPart(array &$parts, EntityInterface $entity): void
    {
        $last = array_pop($parts);
        $last = $this->classNameFixer->fix($last);

        if (ClassTypeBuilderInterface::TYPE_INTERFACE === $this->classTypeBuilder->build($entity)) {
            $last .= 'Interface';
        }

        $parts[] = $last;
    }
}
