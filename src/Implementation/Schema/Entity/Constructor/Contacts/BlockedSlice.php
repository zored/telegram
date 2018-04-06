<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor\Contacts;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\ContactBlockedInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Contacts\BlockedInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\UserInterface;

/**
 * @see https://core.telegram.org/constructor/contacts.blockedSlice
 * @codeCoverageIgnore
 */
final class BlockedSlice implements BlockedInterface
{
    public const ID = -1878523231;

    /** @var IntInterface */
    private $count;

    /** @var ContactBlockedInterface[] */
    private $blocked;

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
