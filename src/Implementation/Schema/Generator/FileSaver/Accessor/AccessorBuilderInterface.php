<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Accessor;

interface AccessorBuilderInterface
{
    public function build(string $prefix, string $property): string;
}
