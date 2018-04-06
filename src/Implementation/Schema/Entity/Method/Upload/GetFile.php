<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Upload;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputFileLocationInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Upload\FileInterface;

/**
 * @see https://core.telegram.org/method/upload.getFile
 * @codeCoverageIgnore
 */
class GetFile
{
    public const ID = -475607115;

    /** @var InputFileLocationInterface */
    private $location;

    /** @var IntInterface */
    private $offset;

    /** @var IntInterface */
    private $limit;

    /** @var FileInterface */
    private $result;

    /**
     * @return InputFileLocationInterface
     */
    public function getLocation(): InputFileLocationInterface
    {
        return $this->location;
    }

    public function setLocation(InputFileLocationInterface $location): self
    {
        $this->location = $location;

        return $this;
    }

    /**
     * @return IntInterface
     */
    public function getOffset(): IntInterface
    {
        return $this->offset;
    }

    public function setOffset(int $offset): self
    {
        $this->offset = new class($offset) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }

    /**
     * @return IntInterface
     */
    public function getLimit(): IntInterface
    {
        return $this->limit;
    }

    public function setLimit(int $limit): self
    {
        $this->limit = new class($limit) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }

    /**
     * @return FileInterface
     */
    public function getResult(): FileInterface
    {
        return $this->result;
    }

    public function setResult(FileInterface $result): self
    {
        $this->result = $result;

        return $this;
    }
}
