<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor\Storage;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Storage\FileTypeInterface;

/**
 * @see https://core.telegram.org/constructor/storage.fileUnknown
 * @codeCoverageIgnore
 */
final class FileUnknown implements FileTypeInterface
{
    public const ID = -1432995067;
}
