<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Messages;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputPeerInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\LongInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Messages\SentMessageInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\StringInterface;

/**
 * @see https://core.telegram.org/method/messages.sendMessage
 * @codeCoverageIgnore
 */
class SendMessage
{
    public const ID = 1289620139;

    /** @var InputPeerInterface */
    private $peer;

    /** @var StringInterface */
    private $message;

    /** @var LongInterface */
    private $random_id;

    /** @var SentMessageInterface */
    private $result;

    /**
     * @return InputPeerInterface
     */
    public function getPeer(): InputPeerInterface
    {
        return $this->peer;
    }

    public function setPeer(InputPeerInterface $peer): self
    {
        $this->peer = $peer;

        return $this;
    }

    /**
     * @return StringInterface
     */
    public function getMessage(): StringInterface
    {
        return $this->message;
    }

    public function setMessage(StringInterface $message): self
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @return LongInterface
     */
    public function getRandomId(): LongInterface
    {
        return $this->random_id;
    }

    public function setRandomId(int $random_id): self
    {
        $this->random_id = new class($random_id) extends AbstractBaseType implements LongInterface {
        };

        return $this;
    }

    /**
     * @return SentMessageInterface
     */
    public function getResult(): SentMessageInterface
    {
        return $this->result;
    }

    public function setResult(SentMessageInterface $result): self
    {
        $this->result = $result;

        return $this;
    }
}
