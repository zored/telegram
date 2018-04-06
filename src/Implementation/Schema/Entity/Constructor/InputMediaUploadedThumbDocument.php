<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\DocumentAttributeInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputFileInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputMediaInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\StringInterface;

/**
 * @see https://core.telegram.org/constructor/inputMediaUploadedThumbDocument
 * @codeCoverageIgnore
 */
final class InputMediaUploadedThumbDocument implements InputMediaInterface
{
    public const ID = 1095242886;

    /** @var InputFileInterface */
    private $file;

    /** @var InputFileInterface */
    private $thumb;

    /** @var StringInterface */
    private $mime_type;

    /** @var DocumentAttributeInterface[] */
    private $attributes;

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
     * @return InputFileInterface
     */
    public function getThumb(): InputFileInterface
    {
        return $this->thumb;
    }

    public function setThumb(InputFileInterface $thumb): self
    {
        $this->thumb = $thumb;

        return $this;
    }

    /**
     * @return StringInterface
     */
    public function getMimeType(): StringInterface
    {
        return $this->mime_type;
    }

    public function setMimeType(StringInterface $mime_type): self
    {
        $this->mime_type = $mime_type;

        return $this;
    }

    /**
     * @return DocumentAttributeInterface[]
     */
    public function getAttributes(): array
    {
        return $this->attributes;
    }

    public function setAttributes(array $attributes): self
    {
        $this->attributes = $attributes;

        return $this;
    }
}
