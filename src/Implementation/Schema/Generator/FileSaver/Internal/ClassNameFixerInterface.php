<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Internal;

interface ClassNameFixerInterface
{
    public function fix(string $shortClassName): string;
}
