<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor\Messages;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\ChatInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\MessageInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Messages\StatedMessagesInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\UserInterface;

/**
 * @see https://core.telegram.org/constructor/messages.statedMessages
 * @codeCoverageIgnore
 */
final class StatedMessages implements StatedMessagesInterface
{
    public const ID = -1768654661;

    /** @var MessageInterface[] */
    private $messages;

    /** @var ChatInterface[] */
    private $chats;

    /** @var UserInterface[] */
    private $users;

    /** @var IntInterface */
    private $pts;

    /** @var IntInterface */
    private $seq;

    /**
     * @return MessageInterface[]
     */
    public function getMessages(): array
    {
        return $this->messages;
    }

    public function setMessages(array $messages): self
    {
        $this->messages = $messages;

        return $this;
    }

    /**
     * @return ChatInterface[]
     */
    public function getChats(): array
    {
        return $this->chats;
    }

    public function setChats(array $chats): self
    {
        $this->chats = $chats;

        return $this;
    }

    /**
     * @return UserInterface[]
     */
    public function getUsers(): array
    {
        return $this->users;
    }

    public function setUsers(array $users): self
    {
        $this->users = $users;

        return $this;
    }

    /**
     * @return IntInterface
     */
    public function getPts(): IntInterface
    {
        return $this->pts;
    }

    public function setPts(int $pts): self
    {
        $this->pts = new class($pts) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }

    /**
     * @return IntInterface
     */
    public function getSeq(): IntInterface
    {
        return $this->seq;
    }

    public function setSeq(int $seq): self
    {
        $this->seq = new class($seq) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }
}
