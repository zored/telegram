<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\SendMessageActionInterface;

/**
 * @see https://core.telegram.org/constructor/sendMessageRecordAudioAction
 * @codeCoverageIgnore
 */
final class SendMessageRecordAudioAction implements SendMessageActionInterface
{
    public const ID = -718310409;
}
