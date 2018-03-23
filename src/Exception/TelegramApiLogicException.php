<?php

declare(strict_types=1);

namespace Zored\Telegram\Exception;

use function get_class;
use function gettype;
use function is_object;

final class TelegramApiLogicException extends \LogicException
{
    public static function becauseOfWrongType($object, string $expected): self
    {
        $actual = is_object($object) ? get_class($object) : gettype($object);

        return new self("Expected '$expected', got: '$actual'.");
    }
}
