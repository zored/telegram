<?php

declare(strict_types=1);

namespace Zored\Telegram\Util\String;

final class StringCaseModifier
{
    public static function toStudyCase(string $value): string
    {
        $value = explode('_', $value);
        $value = array_map('ucfirst', $value);

        return implode($value);
    }
}
