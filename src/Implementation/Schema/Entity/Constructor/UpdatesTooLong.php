<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\UpdatesInterface;

/**
 * @see https://core.telegram.org/constructor/updatesTooLong
 * @codeCoverageIgnore
 */
final class UpdatesTooLong implements UpdatesInterface
{
    public const ID = -484987010;
}
