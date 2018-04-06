<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\MessageActionInterface;

/**
 * @see https://core.telegram.org/constructor/messageActionChatDeletePhoto
 * @codeCoverageIgnore
 */
final class MessageActionChatDeletePhoto implements MessageActionInterface
{
    public const ID = -1780220945;
}
