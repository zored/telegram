<?php

declare(strict_types=1);

namespace Zored\Telegram\Serializer\Jms\Exception;

class JmsSerializerException extends \RuntimeException
{
    public static function becauseNotObjectReturned($result): self
    {
        return new self('Object should be deserializer - got ' . \gettype($result));
    }

    public static function becauseOfWrongMapping(string $before, string $after): self
    {
        return new self("$after class should extend $before to work properly.");
    }
}
