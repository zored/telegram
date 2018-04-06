<?php

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Internal;

final class ClassNameFixer implements ClassNameFixerInterface
{
    private const NAMES = ['True', 'Null'];
    private const PREFIX = 'Telegram';

    public function fix(string $shortClassName): string
    {
        if (\in_array($shortClassName, self::NAMES, true)) {
            $shortClassName = self::PREFIX . $shortClassName;
        }
        return $shortClassName;
    }
}
