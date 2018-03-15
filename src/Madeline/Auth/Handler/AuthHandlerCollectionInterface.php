<?php

namespace Zored\Telegram\Madeline\Auth\Handler;

use Zored\Telegram\Madeline\Config\Auth\AuthConfigInterface;

interface AuthHandlerCollectionInterface
{
    public function get(AuthConfigInterface $config): AuthHandlerInterface;
}
