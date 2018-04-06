<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor\Help;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Help\AppUpdateInterface;

/**
 * @see https://core.telegram.org/constructor/help.noAppUpdate
 * @codeCoverageIgnore
 */
final class NoAppUpdate implements AppUpdateInterface
{
    public const ID = -1000708810;
}
