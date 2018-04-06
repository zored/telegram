<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Entity;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\AccessType("public_method")
 */
final class Method extends AbstractEntity
{
    /**
     * @Serializer\Type("int")
     *
     * @var int
     */
    private $id;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("method")
     *
     * @var string
     */
    protected $name;

    /**
     * @Serializer\SerializedName("params")
     * @Serializer\Type("array<Zored\Telegram\Implementation\Schema\Entity\Parameter>")
     *
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
     *
     * @var string
     */
    private $returnTypeName;

    /**
     * @var EntityInterface
     */
    private $returnType;

    public function addParameter(Parameter $parameter): EntityInterface
    {
        $this->parameters[$parameter->getName()] = $parameter;

        return $this;
    }

    public function setParameters(array $parameters): self
    {
        $this->parameters = $parameters;

        return $this;
    }

    /**
     * {@inheritdoc}
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

    public function getReturnTypeName(): string
    {
        return $this->returnTypeName;
    }

    public function setReturnTypeName(string $returnTypeName): self
    {
        $this->returnTypeName = $returnTypeName;

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

    public function getReturnType(): EntityInterface
    {
        return $this->returnType;
    }

    public function setReturnType(EntityInterface $returnType): self
    {
        $this->returnType = $returnType;

        return $this;
    }
}
