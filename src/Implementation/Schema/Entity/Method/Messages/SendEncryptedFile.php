<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Messages;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\BytesInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputEncryptedChatInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputEncryptedFileInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\LongInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Messages\SentEncryptedMessageInterface;

/**
 * @see https://core.telegram.org/method/messages.sendEncryptedFile
 * @codeCoverageIgnore
 */
class SendEncryptedFile
{
    public const ID = -1701831834;

    /** @var InputEncryptedChatInterface */
    private $peer;

    /** @var LongInterface */
    private $random_id;

    /** @var BytesInterface */
    private $data;

    /** @var InputEncryptedFileInterface */
    private $file;

    /** @var SentEncryptedMessageInterface */
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
     * @return BytesInterface
     */
    public function getData(): BytesInterface
    {
        return $this->data;
    }

    public function setData(BytesInterface $data): self
    {
        $this->data = $data;

        return $this;
    }

    /**
     * @return InputEncryptedFileInterface
     */
    public function getFile(): InputEncryptedFileInterface
    {
        return $this->file;
    }

    public function setFile(InputEncryptedFileInterface $file): self
    {
        $this->file = $file;

        return $this;
    }

    /**
     * @return SentEncryptedMessageInterface
     */
    public function getResult(): SentEncryptedMessageInterface
    {
        return $this->result;
    }

    public function setResult(SentEncryptedMessageInterface $result): self
    {
        $this->result = $result;

        return $this;
    }
}
