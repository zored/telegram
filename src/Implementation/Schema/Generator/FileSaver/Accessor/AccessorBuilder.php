<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Accessor;

final class AccessorBuilder implements AccessorBuilderInterface
{
    public function build(string $prefix, string $property): string
    {
        return $prefix . $this->toStudyCase($property);
    }

    private function toStudyCase(string $property): string
    {
        $property = explode('_', $property);
        $property = array_map('ucfirst', $property);

        return implode($property);
    }
}
