<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Type;

abstract class AbstractClassType implements TypeInterface
{
    /** @var array */
    private $classParts;

    /** @var string */
    private $name;

    public function getClassParts(): array
    {
        return $this->classParts;
    }

    public function setClassParts(array $classParts): self
    {
        $this->classParts = $classParts;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function __toString(): string
    {
        return implode('\\', $this->getClassParts());
    }
}
