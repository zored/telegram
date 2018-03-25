<?php

declare(strict_types=1);

namespace Zored\Telegram\Madeline\Auth\Handler\Exception;

class AuthHandlerException extends \RuntimeException
{
    public static function becauseNoSuitsCall(string $class): self
    {
        return new self("You must call $class::suits first.");
    }

    public static function becauseHandlerNotFound(): self
    {
        return new self('Auth handler not found for config.');
    }
}
