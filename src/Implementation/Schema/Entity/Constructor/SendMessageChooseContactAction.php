<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\SendMessageActionInterface;

/**
 * @see https://core.telegram.org/constructor/sendMessageChooseContactAction
 * @codeCoverageIgnore
 */
final class SendMessageChooseContactAction implements SendMessageActionInterface
{
    public const ID = 1653390447;
}
