<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor\Upload;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\BytesInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Storage\FileTypeInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Upload\FileInterface;

/**
 * @see https://core.telegram.org/constructor/upload.file
 * @codeCoverageIgnore
 */
final class File implements FileInterface
{
    public const ID = 157948117;

    /** @var FileTypeInterface */
    private $type;

    /** @var IntInterface */
    private $mtime;

    /** @var BytesInterface */
    private $bytes;

    /**
     * @return FileTypeInterface
     */
    public function getType(): FileTypeInterface
    {
        return $this->type;
    }

    public function setType(FileTypeInterface $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return IntInterface
     */
    public function getMtime(): IntInterface
    {
        return $this->mtime;
    }

    public function setMtime(int $mtime): self
    {
        $this->mtime = new class($mtime) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }

    /**
     * @return BytesInterface
     */
    public function getBytes(): BytesInterface
    {
        return $this->bytes;
    }

    public function setBytes(BytesInterface $bytes): self
    {
        $this->bytes = $bytes;

        return $this;
    }
}
