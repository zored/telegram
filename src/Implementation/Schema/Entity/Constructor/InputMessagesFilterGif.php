<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\MessagesFilterInterface;

/**
 * @see https://core.telegram.org/constructor/inputMessagesFilterGif
 * @codeCoverageIgnore
 */
final class InputMessagesFilterGif implements MessagesFilterInterface
{
    public const ID = -3644025;
}
