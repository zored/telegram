<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Writer;

interface FileWriterInterface
{
    public function rewrite(string $path, string $content): void;
}
