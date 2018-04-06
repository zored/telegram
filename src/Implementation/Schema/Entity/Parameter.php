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
     *
     * @var string
     */
    private $name;

    /**
     * @Serializer\SerializedName("type")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $typeName;

    /**
     * @Serializer\Exclude()
     *
     * @var EntityInterface
     */
    private $type;

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function setType(EntityInterface $type): self
    {
        $this->type = $type;

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
