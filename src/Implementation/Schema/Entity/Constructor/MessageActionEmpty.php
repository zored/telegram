<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\MessageActionInterface;

/**
 * @see https://core.telegram.org/constructor/messageActionEmpty
 * @codeCoverageIgnore
 */
final class MessageActionEmpty implements MessageActionInterface
{
    public const ID = -1230047312;
}
