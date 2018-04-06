<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Entity;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\AccessType("public_method")
 */
final class Parameter
{
    /**
     * @Serializer\Type("string")
     * @var string
     */
    private $name;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    private $typeName;

    /**
     * @var EntityInterface
     */
    private $type;

    /**
     * @var bool
     */
    private $isVector = false;

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function setType(EntityInterface $type): self
    {
        $vectorizedType = self::getVectorizedType($type);
        if ($vectorizedType) {
            $type = $vectorizedType;
            $this->setIsVector(true);
        }
        $this->type = $type;

        return $this;
    }

    public function setIsVector(bool $isVector): self
    {
        $this->isVector = $isVector;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getType(): EntityInterface
    {
        return $this->type;
    }

    public function isVector(): bool
    {
        return $this->isVector;
    }

    public static function getVectorizedType(string $type): ?string
    {
        if (!preg_match('/^vector<(?<type>.*)>$/i', $type, $matches)) {
            return null;
        }

        return $matches['type'];
    }

    public function getTypeName(): string
    {
        return $this->typeName;
    }

    public function setTypeName(string $typeName): self
    {
        $this->typeName = $typeName;

        return $this;
    }
}
