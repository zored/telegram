<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor\Messages;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\ChatInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Contacts\LinkInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\MessageInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Messages\StatedMessageInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\UserInterface;

/**
 * @see https://core.telegram.org/constructor/messages.statedMessageLink
 * @codeCoverageIgnore
 */
final class StatedMessageLink implements StatedMessageInterface
{
    public const ID = -1448138623;

    /** @var MessageInterface */
    private $message;

    /** @var ChatInterface[] */
    private $chats;

    /** @var UserInterface[] */
    private $users;

    /** @var LinkInterface[] */
    private $links;

    /** @var IntInterface */
    private $pts;

    /** @var IntInterface */
    private $seq;

    /**
     * @return MessageInterface
     */
    public function getMessage(): MessageInterface
    {
        return $this->message;
    }

    public function setMessage(MessageInterface $message): self
    {
        $this->message = $message;

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
     * @return LinkInterface[]
     */
    public function getLinks(): array
    {
        return $this->links;
    }

    public function setLinks(array $links): self
    {
        $this->links = $links;

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
