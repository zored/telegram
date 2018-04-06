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
     * @Serializer\Type("string")
     * @Serializer\SerializedName("predicate")
     *
     * @var string
     */
    protected $name;

    /**
     * @Serializer\Exclude()
     * Examples:
     * - `['user', 'UserAdmin']`
     * - `['bool']`
     *
     * @var string[]
     */
    private $relativeName;

    /**
     * @Serializer\Exclude()
     *
     * @var EntityInterface
     */
    private $child;

    /**
     * @Serializer\Exclude()
     *
     * @var bool
     */
    private $isVector = false;

    private static function createRelativeName(string $name): array
    {
        return explode('.', $name);
    }

    private static function getVectorItemName(string $type): ?string
    {
        if (!preg_match('/^vector<(?<type>.*)>$/i', $type, $matches)) {
            return null;
        }

        return $matches['type'];
    }

    public function getRelativeName(): array
    {
        return $this->relativeName;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): EntityInterface
    {
        $itemName = self::getVectorItemName($name);
        if ($itemName) {
            $name = $itemName;
            $this->setIsVector(true);
        }

        $this->name = $name;
        $this->relativeName = self::createRelativeName($name);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function hasParameter(string $name): bool
    {
        // No parameters by default.
        return false;
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

    public function isVector(): bool
    {
        return $this->isVector;
    }

    public function setIsVector(bool $isVector): self
    {
        $this->isVector = $isVector;

        return $this;
    }
}
