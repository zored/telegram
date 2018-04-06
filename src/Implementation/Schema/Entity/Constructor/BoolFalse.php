<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\BoolInterface;

/**
 * @see https://core.telegram.org/constructor/boolFalse
 * @codeCoverageIgnore
 */
final class BoolFalse implements BoolInterface
{
    public const ID = -1132882121;
}
