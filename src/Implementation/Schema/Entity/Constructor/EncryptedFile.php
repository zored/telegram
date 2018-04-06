<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\EncryptedFileInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\LongInterface;

/**
 * @see https://core.telegram.org/constructor/encryptedFile
 * @codeCoverageIgnore
 */
final class EncryptedFile implements EncryptedFileInterface
{
    public const ID = 1248893260;

    /** @var LongInterface */
    private $id;

    /** @var LongInterface */
    private $access_hash;

    /** @var IntInterface */
    private $size;

    /** @var IntInterface */
    private $dc_id;

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
     * @return LongInterface
     */
    public function getAccessHash(): LongInterface
    {
        return $this->access_hash;
    }

    public function setAccessHash(int $access_hash): self
    {
        $this->access_hash = new class($access_hash) extends AbstractBaseType implements LongInterface {
        };

        return $this;
    }

    /**
     * @return IntInterface
     */
    public function getSize(): IntInterface
    {
        return $this->size;
    }

    public function setSize(int $size): self
    {
        $this->size = new class($size) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }

    /**
     * @return IntInterface
     */
    public function getDcId(): IntInterface
    {
        return $this->dc_id;
    }

    public function setDcId(int $dc_id): self
    {
        $this->dc_id = new class($dc_id) extends AbstractBaseType implements IntInterface {
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
