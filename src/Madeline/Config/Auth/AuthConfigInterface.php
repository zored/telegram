<?php

namespace Zored\Telegram\Madeline\Config\Auth;

interface AuthConfigInterface
{
    public function getExpireSeconds(): int;
}
