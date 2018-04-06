<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\EncryptedFileInterface;

/**
 * @see https://core.telegram.org/constructor/encryptedFileEmpty
 * @codeCoverageIgnore
 */
final class EncryptedFileEmpty implements EncryptedFileInterface
{
    public const ID = -1038136962;
}
