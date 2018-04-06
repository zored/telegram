<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Entity;

interface EntityInterface
{
    public function getRelativeName(): array;

    public function setRelativeName(array $relativeName): self;

    public function getName(): string;

    public function setName(string $name): self;

    public function getId(): int;

    public function setId(int $id): self;

    public function setChild(EntityInterface $child): self;

    public function getChild(): ?self;

    public function hasParameter(string $name): bool;
}
