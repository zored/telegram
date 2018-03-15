<?php

namespace Zored\Telegram\Exception;

final class TelegramApiFactoryException extends \RuntimeException
{
    public static function becauseOfApiException(\Exception $apiException): self
    {
        return new self('Api builder exception occurred.', 0, $apiException);
    }

    public static function becauseUnknownConfig($authConfig): self
    {
        return new self('Unknown auth config type.');
    }
}
