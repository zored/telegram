<?php

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Accessor;

final class AccessorBuilder implements AccessorBuilderInterface
{
    public function build(string $prefix, string $property): string
    {
        // TODO: make better.
        return $prefix . ucfirst($property);
    }
}
