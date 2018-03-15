<?php

declare(strict_types=1);

namespace Zored\Telegram\Tests\Entity\General;

use PHPUnit\Framework\TestCase;
use Zored\Telegram\Entity\General\UsersAwareTrait;
use Zored\Telegram\Entity\User;

final class UsersAwareTraitTest extends TestCase
{
    public function testFindChatByTitle(): void
    {
        $usersAware = $this->getMockForTrait(UsersAwareTrait::class);
        $user = new User();
        $user->setFirstName('Foo');
        $user->setLastName('Bar');
        $usersAware->setUsers([$user]);
        $this->assertSame($user, $usersAware->findUserByFullName('foo ba'));
    }
}
