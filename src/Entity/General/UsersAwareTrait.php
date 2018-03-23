<?php

declare(strict_types=1);

namespace Zored\Telegram\Entity\General;

use JMS\Serializer\Annotation as Serializer;
use Zored\Telegram\Entity\User;
use Zored\Telegram\Util\Collection\FuzzyMatcher;
use Zored\Telegram\Util\Collection\StringMatcherInterface;

trait UsersAwareTrait
{
    /**
     * @Serializer\Type("array<Zored\Telegram\Entity\User>")
     *
     * @var User[]
     */
    private $users = [];

    /**
     * @return User[]
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
     * @throws \LogicException
     */
    public function findUserByFullName(string $name): ?User
    {
        /** @var User|null $user */
        $user = $this->getUserMatcher()->matchFirst($name, function (User $user) {
            return $user->getFullName();
        });

        return $user;
    }

    private function getUserMatcher(): StringMatcherInterface
    {
        return new FuzzyMatcher($this->getUsers());
    }
}
