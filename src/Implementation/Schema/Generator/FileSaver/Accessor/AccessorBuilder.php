<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Accessor;

use Zored\Telegram\Util\String\StringCaseModifier;

final class AccessorBuilder implements AccessorBuilderInterface
{
    public function build(string $prefix, string $property): string
    {
        return $prefix . StringCaseModifier::toStudyCase($property);
    }
}
