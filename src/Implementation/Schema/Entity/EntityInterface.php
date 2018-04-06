<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Entity;

interface EntityInterface
{
    public function isVector(): bool;

    public function getRelativeName(): array;

    public function getName(): string;

    public function setName(string $name): self;

    public function hasParameter(string $name): bool;
}
