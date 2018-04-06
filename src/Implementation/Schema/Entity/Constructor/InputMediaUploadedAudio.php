<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputFileInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputMediaInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\StringInterface;

/**
 * @see https://core.telegram.org/constructor/inputMediaUploadedAudio
 * @codeCoverageIgnore
 */
final class InputMediaUploadedAudio implements InputMediaInterface
{
    public const ID = 1313442987;

    /** @var InputFileInterface */
    private $file;

    /** @var IntInterface */
    private $duration;

    /** @var StringInterface */
    private $mime_type;

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
     * @return IntInterface
     */
    public function getDuration(): IntInterface
    {
        return $this->duration;
    }

    public function setDuration(int $duration): self
    {
        $this->duration = new class($duration) extends AbstractBaseType implements IntInterface {
        };

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
}
