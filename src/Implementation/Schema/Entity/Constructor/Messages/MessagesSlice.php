<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor\Messages;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\ChatInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\MessageInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Messages\MessagesInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\UserInterface;

/**
 * @see https://core.telegram.org/constructor/messages.messagesSlice
 * @codeCoverageIgnore
 */
final class MessagesSlice implements MessagesInterface
{
    public const ID = 189033187;

    /** @var IntInterface */
    private $count;

    /** @var MessageInterface[] */
    private $messages;

    /** @var ChatInterface[] */
    private $chats;

    /** @var UserInterface[] */
    private $users;

    /**
     * @return IntInterface
     */
    public function getCount(): IntInterface
    {
        return $this->count;
    }

    public function setCount(int $count): self
    {
        $this->count = new class($count) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }

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
}