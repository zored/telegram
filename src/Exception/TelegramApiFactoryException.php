<?php

declare(strict_types=1);

namespace Zored\Telegram\Exception;

final class TelegramApiFactoryException extends \RuntimeException
{
    public static function becauseOfApiException(\Exception $apiException): self
    {
        return new self('Api builder exception occurred.', 0, $apiException);
    }
}
