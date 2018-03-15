<?php

namespace Zored\Telegram\Madeline\Auth\Handler;

use danog\MadelineProto\MTProto;
use Zored\Telegram\Madeline\Config\Auth\AuthConfigInterface;

interface AuthHandlerInterface
{
    public function suits(AuthConfigInterface $config): bool;

    public function auth(MTProto $proto): void;
}
