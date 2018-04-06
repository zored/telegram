<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Entity;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\AccessType("public_method")
 */
abstract class AbstractEntity implements EntityInterface
{
    /**
     * Examples:
     * - `['user', 'UserAdmin']`
     * - `['bool']`
     * @var string[]
     */
    private $relativeName;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("predicate")
     * @var string
     */
    private $name;

    /**
     * @Serializer\Type("int")
     * @var int
     */
    private $id;

    /**
     * @var EntityInterface
     */
    private $child;

    public function getRelativeName(): array
    {
        return $this->relativeName;
    }

    public function setRelativeName(array $relativeName): EntityInterface
    {
        $this->relativeName = $relativeName;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): EntityInterface
    {
        $this->name = $name;
        $this->setRelativeName(self::createRelativeName($name));

        return $this;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): EntityInterface
    {
        $this->id = $id;

        return $this;
    }

    public static function createRelativeName(string $name): array
    {
        $parts = explode('.', $name);

        return $parts;
    }

    public function getChild(): ?EntityInterface
    {
        return $this->child;
    }

    public function setChild(EntityInterface $child): EntityInterface
    {
        $this->child = $child;

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function hasParameter(string $name): bool
    {
        // No parameters by default.
        return false;
    }


}
