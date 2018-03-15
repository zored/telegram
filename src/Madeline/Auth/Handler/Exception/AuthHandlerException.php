<?php

namespace Zored\Telegram\Madeline\Auth\Handler\Exception;

final class AuthHandlerException extends \RuntimeException
{
    public static function becauseNoSuitsCall(string $class): self
    {
        return new self("You must call $class::suits first.");
    }
}
