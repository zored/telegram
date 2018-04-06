<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputEncryptedFileInterface;

/**
 * @see https://core.telegram.org/constructor/inputEncryptedFileEmpty
 * @codeCoverageIgnore
 */
final class InputEncryptedFileEmpty implements InputEncryptedFileInterface
{
    public const ID = 406307684;
}
