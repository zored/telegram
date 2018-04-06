<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputFileInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\LongInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\StringInterface;

/**
 * @see https://core.telegram.org/constructor/inputFile
 * @codeCoverageIgnore
 */
final class InputFile implements InputFileInterface
{
    public const ID = -181407105;

    /** @var LongInterface */
    private $id;

    /** @var IntInterface */
    private $parts;

    /** @var StringInterface */
    private $name;

    /** @var StringInterface */
    private $md5_checksum;

    /**
     * @return LongInterface
     */
    public function getId(): LongInterface
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = new class($id) extends AbstractBaseType implements LongInterface {
        };

        return $this;
    }

    /**
     * @return IntInterface
     */
    public function getParts(): IntInterface
    {
        return $this->parts;
    }

    public function setParts(int $parts): self
    {
        $this->parts = new class($parts) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }

    /**
     * @return StringInterface
     */
    public function getName(): StringInterface
    {
        return $this->name;
    }

    public function setName(StringInterface $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return StringInterface
     */
    public function getMd5Checksum(): StringInterface
    {
        return $this->md5_checksum;
    }

    public function setMd5Checksum(StringInterface $md5_checksum): self
    {
        $this->md5_checksum = $md5_checksum;

        return $this;
    }
}
