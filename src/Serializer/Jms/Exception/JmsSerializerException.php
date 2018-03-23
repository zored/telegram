<?php

declare(strict_types=1);

namespace Zored\Telegram\Serializer\Jms\Exception;

final class JmsSerializerException extends \RuntimeException
{
    public static function becauseNotObjectReturned($result): self
    {
        return new self('Object should be deserializer - got ' . \gettype($result));
    }
}
