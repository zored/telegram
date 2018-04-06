<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Upload;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\BoolInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\BytesInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\LongInterface;

/**
 * @see https://core.telegram.org/method/upload.saveBigFilePart
 * @codeCoverageIgnore
 */
class SaveBigFilePart
{
    public const ID = -562337987;

    /** @var LongInterface */
    private $file_id;

    /** @var IntInterface */
    private $file_part;

    /** @var IntInterface */
    private $file_total_parts;

    /** @var BytesInterface */
    private $bytes;

    /** @var BoolInterface */
    private $result;

    /**
     * @return LongInterface
     */
    public function getFileId(): LongInterface
    {
        return $this->file_id;
    }

    public function setFileId(int $file_id): self
    {
        $this->file_id = new class($file_id) extends AbstractBaseType implements LongInterface {
        };

        return $this;
    }

    /**
     * @return IntInterface
     */
    public function getFilePart(): IntInterface
    {
        return $this->file_part;
    }

    public function setFilePart(int $file_part): self
    {
        $this->file_part = new class($file_part) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }

    /**
     * @return IntInterface
     */
    public function getFileTotalParts(): IntInterface
    {
        return $this->file_total_parts;
    }

    public function setFileTotalParts(int $file_total_parts): self
    {
        $this->file_total_parts = new class($file_total_parts) extends AbstractBaseType implements IntInterface {
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

    /**
     * @return BoolInterface
     */
    public function getResult(): BoolInterface
    {
        return $this->result;
    }

    public function setResult(BoolInterface $result): self
    {
        $this->result = $result;

        return $this;
    }
}
