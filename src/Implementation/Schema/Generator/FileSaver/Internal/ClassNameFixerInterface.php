<?php

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Internal;

interface ClassNameFixerInterface
{
    public function fix(string $shortClassName): string;
}
