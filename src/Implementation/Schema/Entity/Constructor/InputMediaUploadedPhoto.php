<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputFileInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputMediaInterface;

/**
 * @see https://core.telegram.org/constructor/inputMediaUploadedPhoto
 * @codeCoverageIgnore
 */
final class InputMediaUploadedPhoto implements InputMediaInterface
{
    public const ID = 767900285;

    /** @var InputFileInterface */
    private $file;

    /**
     * @return InputFileInterface
     */
    public function getFile(): InputFileInterface
    {
        return $this->file;
    }

    public function setFile(InputFileInterface $file): self
    {
        $this->file = $file;

        return $this;
    }
}
