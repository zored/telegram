<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\EncryptedChatInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\UpdateInterface;

/**
 * @see https://core.telegram.org/constructor/updateEncryption
 * @codeCoverageIgnore
 */
final class UpdateEncryption implements UpdateInterface
{
    public const ID = -1264392051;

    /** @var EncryptedChatInterface */
    private $chat;

    /** @var IntInterface */
    private $date;

    /**
     * @return EncryptedChatInterface
     */
    public function getChat(): EncryptedChatInterface
    {
        return $this->chat;
    }

    public function setChat(EncryptedChatInterface $chat): self
    {
        $this->chat = $chat;

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
}
