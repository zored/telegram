<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputEncryptedFileInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\LongInterface;

/**
 * @see https://core.telegram.org/constructor/inputEncryptedFileBigUploaded
 * @codeCoverageIgnore
 */
final class InputEncryptedFileBigUploaded implements InputEncryptedFileInterface
{
    public const ID = 767652808;

    /** @var LongInterface */
    private $id;

    /** @var IntInterface */
    private $parts;

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
