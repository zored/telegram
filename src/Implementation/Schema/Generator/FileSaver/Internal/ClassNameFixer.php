<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Internal;

final class ClassNameFixer implements ClassNameFixerInterface
{
    private const NAMES = [
        'True' => 'TelegramTrue',
        'Null' => 'TelegramNull',

        // TODO: ?
        '!X' => 'Unknown1',
        'X' => 'Unknown2',
        '#' => 'Unknown3',
        'flags.0?true' => 'Unknown4',
        '0?true' => 'Unknown5',
        '%Message' => 'Unknown6',
    ];

    public function fix(string $shortClassName): string
    {
        return self::NAMES[$shortClassName] ?? $shortClassName;
    }
}
