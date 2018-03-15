<?php

namespace Zored\Telegram\Madeline\Auth\Handler;

use danog\MadelineProto\MTProto;
use Zored\Telegram\Madeline\Auth\Handler\Exception\AuthHandlerException;
use Zored\Telegram\Madeline\Config\Auth\AuthConfigInterface;

interface AuthHandlerInterface
{
    public function suits(AuthConfigInterface $config): bool;

    /**
     * @throws AuthHandlerException
     */
    public function auth(MTProto $proto): void;
}
