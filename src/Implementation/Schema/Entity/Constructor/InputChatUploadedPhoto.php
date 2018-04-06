<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputChatPhotoInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputFileInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputPhotoCropInterface;

/**
 * @see https://core.telegram.org/constructor/inputChatUploadedPhoto
 * @codeCoverageIgnore
 */
final class InputChatUploadedPhoto implements InputChatPhotoInterface
{
    public const ID = -1809496270;

    /** @var InputFileInterface */
    private $file;

    /** @var InputPhotoCropInterface */
    private $crop;

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

    /**
     * @return InputPhotoCropInterface
     */
    public function getCrop(): InputPhotoCropInterface
    {
        return $this->crop;
    }

    public function setCrop(InputPhotoCropInterface $crop): self
    {
        $this->crop = $crop;

        return $this;
    }
}
