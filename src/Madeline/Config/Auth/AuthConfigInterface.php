<?php

declare(strict_types=1);

namespace Zored\Telegram\Madeline\Config\Auth;

interface AuthConfigInterface
{
    public function getExpireSeconds(): int;
}
