<?php

namespace Zored\Telegram\Exception;

final class TelegramApiBuilderException extends \RuntimeException
{
    public static function becauseOfApiException(\Exception $apiException): self
    {
        return new self('Api builder exception occurred.', 0, $apiException);
    }
}
