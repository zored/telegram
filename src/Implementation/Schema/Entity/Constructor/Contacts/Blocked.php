<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor\Contacts;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\ContactBlockedInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Contacts\BlockedInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\UserInterface;

/**
 * @see https://core.telegram.org/constructor/contacts.blocked
 * @codeCoverageIgnore
 */
final class Blocked implements BlockedInterface
{
    public const ID = 471043349;

    /** @var ContactBlockedInterface[] */
    private $blocked;

    /** @var UserInterface[] */
    private $users;

    /**
     * @return ContactBlockedInterface[]
     */
    public function getBlocked(): array
    {
        return $this->blocked;
    }

    public function setBlocked(array $blocked): self
    {
        $this->blocked = $blocked;

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
