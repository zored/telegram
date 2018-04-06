<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Auth;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\BoolInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\BytesInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\LongInterface;

/**
 * @see https://core.telegram.org/method/auth.bindTempAuthKey
 * @codeCoverageIgnore
 */
class BindTempAuthKey
{
    public const ID = -841733627;

    /** @var LongInterface */
    private $perm_auth_key_id;

    /** @var LongInterface */
    private $nonce;

    /** @var IntInterface */
    private $expires_at;

    /** @var BytesInterface */
    private $encrypted_message;

    /** @var BoolInterface */
    private $result;

    /**
     * @return LongInterface
     */
    public function getPermAuthKeyId(): LongInterface
    {
        return $this->perm_auth_key_id;
    }

    public function setPermAuthKeyId(int $perm_auth_key_id): self
    {
        $this->perm_auth_key_id = new class($perm_auth_key_id) extends AbstractBaseType implements LongInterface {
        };

        return $this;
    }

    /**
     * @return LongInterface
     */
    public function getNonce(): LongInterface
    {
        return $this->nonce;
    }

    public function setNonce(int $nonce): self
    {
        $this->nonce = new class($nonce) extends AbstractBaseType implements LongInterface {
        };

        return $this;
    }

    /**
     * @return IntInterface
     */
    public function getExpiresAt(): IntInterface
    {
        return $this->expires_at;
    }

    public function setExpiresAt(int $expires_at): self
    {
        $this->expires_at = new class($expires_at) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }

    /**
     * @return BytesInterface
     */
    public function getEncryptedMessage(): BytesInterface
    {
        return $this->encrypted_message;
    }

    public function setEncryptedMessage(BytesInterface $encrypted_message): self
    {
        $this->encrypted_message = $encrypted_message;

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
