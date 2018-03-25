<?php

declare(strict_types=1);

namespace Zored\Telegram\Exception;

class TelegramApiException extends \RuntimeException
{
    public static function becauseOfApiException(\Exception $apiException): self
    {
        return new self('Api exception occurred.', 0, $apiException);
    }
}
