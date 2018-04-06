<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Messages;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\BytesInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\EncryptedChatInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputEncryptedChatInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\LongInterface;

/**
 * @see https://core.telegram.org/method/messages.acceptEncryption
 * @codeCoverageIgnore
 */
class AcceptEncryption
{
    public const ID = 1035731989;

    /** @var InputEncryptedChatInterface */
    private $peer;

    /** @var BytesInterface */
    private $g_b;

    /** @var LongInterface */
    private $key_fingerprint;

    /** @var EncryptedChatInterface */
    private $result;

    /**
     * @return InputEncryptedChatInterface
     */
    public function getPeer(): InputEncryptedChatInterface
    {
        return $this->peer;
    }

    public function setPeer(InputEncryptedChatInterface $peer): self
    {
        $this->peer = $peer;

        return $this;
    }

    /**
     * @return BytesInterface
     */
    public function getGB(): BytesInterface
    {
        return $this->g_b;
    }

    public function setGB(BytesInterface $g_b): self
    {
        $this->g_b = $g_b;

        return $this;
    }

    /**
     * @return LongInterface
     */
    public function getKeyFingerprint(): LongInterface
    {
        return $this->key_fingerprint;
    }

    public function setKeyFingerprint(int $key_fingerprint): self
    {
        $this->key_fingerprint = new class($key_fingerprint) extends AbstractBaseType implements LongInterface {
        };

        return $this;
    }

    /**
     * @return EncryptedChatInterface
     */
    public function getResult(): EncryptedChatInterface
    {
        return $this->result;
    }

    public function setResult(EncryptedChatInterface $result): self
    {
        $this->result = $result;

        return $this;
    }
}
