<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Type;

final class BaseType implements TypeInterface
{
    /** @var string */
    private $name;

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
        return $this->getName();
    }
}
