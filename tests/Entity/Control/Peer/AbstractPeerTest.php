<?php

declare(strict_types=1);

namespace Zored\Telegram\Tests\Entity\Control\Peer;

use PHPUnit\Framework\TestCase;
use Zored\Telegram\Entity\Control\Peer\AbstractPeer;
use Zored\Telegram\Entity\Control\Peer\Channel;
use Zored\Telegram\Entity\Control\Peer\Chat;
use Zored\Telegram\Entity\Control\Peer\User;

class AbstractPeerTest extends TestCase
{
    public function testGetters(): void
    {
        $peer = $this->getMockForAbstractClass(
            AbstractPeer::class,
            [$id = 123]
        );
        $this->assertSame($id, $peer->getId());
    }

    public function testInstances(): void
    {
        $id = 123;
        $this->assertSame('user', (new User($id))->getType());
        $this->assertSame('channel', (new Channel($id))->getType());
        $this->assertSame('chat', (new Chat($id))->getType());
    }
}
