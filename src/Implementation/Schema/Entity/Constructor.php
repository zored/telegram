<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Entity;

use JMS\Serializer\Annotation as Serializer;

final class Constructor extends AbstractEntity
{
    /**
     * @Serializer\Type("array<Zored\Telegram\Implementation\Schema\Entity\Parameter>")
     * @var Parameter[]
     */
    private $parameters = [];

    /**
     * @var EntityInterface
     */
    private $parent;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("type")
     * @var string
     */
    private $typeName;

    public function addParameter(Parameter $parameter): EntityInterface
    {
        $this->parameters[$parameter->getName()] = $parameter;

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function hasParameter(string $name): bool
    {
        return isset($this->parameters[$name]);
    }

    /**
     * @return Parameter[]
     */
    public function getParameters(): array
    {
        return $this->parameters;
    }

    public function getParent(): EntityInterface
    {
        return $this->parent;
    }

    public function setParent(EntityInterface $parent): EntityInterface
    {
        $this->parent = $parent;

        return $this;
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
