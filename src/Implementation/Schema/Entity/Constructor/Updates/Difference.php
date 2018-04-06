<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor\Updates;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\ChatInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\EncryptedMessageInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\MessageInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\UpdateInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Updates\DifferenceInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Updates\StateInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\UserInterface;

/**
 * @see https://core.telegram.org/constructor/updates.difference
 * @codeCoverageIgnore
 */
final class Difference implements DifferenceInterface
{
    public const ID = 16030880;

    /** @var MessageInterface[] */
    private $new_messages;

    /** @var EncryptedMessageInterface[] */
    private $new_encrypted_messages;

    /** @var UpdateInterface[] */
    private $other_updates;

    /** @var ChatInterface[] */
    private $chats;

    /** @var UserInterface[] */
    private $users;

    /** @var StateInterface */
    private $state;

    /**
     * @return MessageInterface[]
     */
    public function getNewMessages(): array
    {
        return $this->new_messages;
    }

    public function setNewMessages(array $new_messages): self
    {
        $this->new_messages = $new_messages;

        return $this;
    }

    /**
     * @return EncryptedMessageInterface[]
     */
    public function getNewEncryptedMessages(): array
    {
        return $this->new_encrypted_messages;
    }

    public function setNewEncryptedMessages(array $new_encrypted_messages): self
    {
        $this->new_encrypted_messages = $new_encrypted_messages;

        return $this;
    }

    /**
     * @return UpdateInterface[]
     */
    public function getOtherUpdates(): array
    {
        return $this->other_updates;
    }

    public function setOtherUpdates(array $other_updates): self
    {
        $this->other_updates = $other_updates;

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
     * @return StateInterface
     */
    public function getState(): StateInterface
    {
        return $this->state;
    }

    public function setState(StateInterface $state): self
    {
        $this->state = $state;

        return $this;
    }
}
