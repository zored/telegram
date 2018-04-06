<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputEncryptedFileInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\LongInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\StringInterface;

/**
 * @see https://core.telegram.org/constructor/inputEncryptedFileUploaded
 * @codeCoverageIgnore
 */
final class InputEncryptedFileUploaded implements InputEncryptedFileInterface
{
    public const ID = 1690108678;

    /** @var LongInterface */
    private $id;

    /** @var IntInterface */
    private $parts;

    /** @var StringInterface */
    private $md5_checksum;

    /** @var IntInterface */
    private $key_fingerprint;

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
    public function getMd5Checksum(): StringInterface
    {
        return $this->md5_checksum;
    }

    public function setMd5Checksum(string $md5_checksum): self
    {
        $this->md5_checksum = new class($md5_checksum) extends AbstractBaseType implements StringInterface {
        };

        return $this;
    }

    /**
     * @return IntInterface
     */
    public function getKeyFingerprint(): IntInterface
    {
        return $this->key_fingerprint;
    }

    public function setKeyFingerprint(int $key_fingerprint): self
    {
        $this->key_fingerprint = new class($key_fingerprint) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }
}
