<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema;

use Zored\Telegram\Implementation\Schema\Type\TypeInterface;

final class Parameter
{
    /** @var string */
    private $name;

    /** @var TypeInterface */
    private $type;

    /** @var bool */
    private $isArray;

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function setType(TypeInterface $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function setIsArray(bool $isArray): self
    {
        $this->isArray = $isArray;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getType(): TypeInterface
    {
        return $this->type;
    }

    public function isArray(): bool
    {
        return $this->isArray;
    }
}
