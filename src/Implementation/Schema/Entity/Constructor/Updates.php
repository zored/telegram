<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\ChatInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\UpdateInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\UpdatesInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\UserInterface;

/**
 * @see https://core.telegram.org/constructor/updates
 * @codeCoverageIgnore
 */
final class Updates implements UpdatesInterface
{
    public const ID = 1957577280;

    /** @var UpdateInterface[] */
    private $updates;

    /** @var UserInterface[] */
    private $users;

    /** @var ChatInterface[] */
    private $chats;

    /** @var IntInterface */
    private $date;

    /** @var IntInterface */
    private $seq;

    /**
     * @return UpdateInterface[]
     */
    public function getUpdates(): array
    {
        return $this->updates;
    }

    public function setUpdates(array $updates): self
    {
        $this->updates = $updates;

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
