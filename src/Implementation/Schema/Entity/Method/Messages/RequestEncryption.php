<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Messages;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\BytesInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\EncryptedChatInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputUserInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;

/**
 * @see https://core.telegram.org/method/messages.requestEncryption
 * @codeCoverageIgnore
 */
class RequestEncryption
{
    public const ID = -162681021;

    /** @var InputUserInterface */
    private $user_id;

    /** @var IntInterface */
    private $random_id;

    /** @var BytesInterface */
    private $g_a;

    /** @var EncryptedChatInterface */
    private $result;

    /**
     * @return InputUserInterface
     */
    public function getUserId(): InputUserInterface
    {
        return $this->user_id;
    }

    public function setUserId(InputUserInterface $user_id): self
    {
        $this->user_id = $user_id;

        return $this;
    }

    /**
     * @return IntInterface
     */
    public function getRandomId(): IntInterface
    {
        return $this->random_id;
    }

    public function setRandomId(int $random_id): self
    {
        $this->random_id = new class($random_id) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }

    /**
     * @return BytesInterface
     */
    public function getGA(): BytesInterface
    {
        return $this->g_a;
    }

    public function setGA(BytesInterface $g_a): self
    {
        $this->g_a = $g_a;

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
