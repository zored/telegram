<?php

declare(strict_types=1);

namespace Zored\Telegram\Madeline\Config\Auth;

interface AuthConfigInterface
{
    public function getExpireSeconds(): int;

    public function isHandleUpdates(): bool;

    public function setHandleUpdates(bool $handleUpdates): self;
}
