<?php

namespace Zored\Telegram\Madeline\Auth\Handler;

use Zored\Telegram\Madeline\Config\Auth\AuthConfigInterface;

interface AuthHandlerCollectionInterface
{
    /**
     * @throws \Zored\Telegram\Madeline\Auth\Handler\Exception\AuthHandlerException
     */
    public function get(AuthConfigInterface $config): AuthHandlerInterface;
}
