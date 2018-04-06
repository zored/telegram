<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\BytesInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\EncryptedMessageInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\LongInterface;

/**
 * @see https://core.telegram.org/constructor/encryptedMessageService
 * @codeCoverageIgnore
 */
final class EncryptedMessageService implements EncryptedMessageInterface
{
    public const ID = 594758406;

    /** @var LongInterface */
    private $random_id;

    /** @var IntInterface */
    private $chat_id;

    /** @var IntInterface */
    private $date;

    /** @var BytesInterface */
    private $bytes;

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
     * @return IntInterface
     */
    public function getChatId(): IntInterface
    {
        return $this->chat_id;
    }

    public function setChatId(int $chat_id): self
    {
        $this->chat_id = new class($chat_id) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }

    /**
     * @return IntInterface
     */
    public function getDate(): IntInterface
    {
        return $this->date;
    }

    public function setDate(int $date): self
    {
        $this->date = new class($date) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }

    /**
     * @return BytesInterface
     */
    public function getBytes(): BytesInterface
    {
        return $this->bytes;
    }

    public function setBytes(BytesInterface $bytes): self
    {
        $this->bytes = $bytes;

        return $this;
    }
}
