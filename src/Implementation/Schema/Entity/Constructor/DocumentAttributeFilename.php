<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\DocumentAttributeInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\StringInterface;

/**
 * @see https://core.telegram.org/constructor/documentAttributeFilename
 * @codeCoverageIgnore
 */
final class DocumentAttributeFilename implements DocumentAttributeInterface
{
    public const ID = 358154344;

    /** @var StringInterface */
    private $file_name;

    /**
     * @return StringInterface
     */
    public function getFileName(): StringInterface
    {
        return $this->file_name;
    }

    public function setFileName(StringInterface $file_name): self
    {
        $this->file_name = $file_name;

        return $this;
    }
}
