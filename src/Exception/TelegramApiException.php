<?php

namespace Zored\Telegram\Exception;

final class TelegramApiException extends \RuntimeException
{
    public static function becauseOfApiException(\Exception $apiException): self
    {
        return new self("Api exception occurred.", 0, $apiException);
    }
}
