<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\SendMessageActionInterface;

/**
 * @see https://core.telegram.org/constructor/sendMessageGeoLocationAction
 * @codeCoverageIgnore
 */
final class SendMessageGeoLocationAction implements SendMessageActionInterface
{
    public const ID = 393186209;
}
