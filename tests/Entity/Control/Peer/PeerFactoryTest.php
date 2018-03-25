<?php

declare(strict_types=1);

namespace Zored\Telegram\Tests\Entity\Control\Peer;

use PHPUnit\Framework\TestCase;
use Zored\Telegram\Entity\Chat as EntityChat;
use Zored\Telegram\Entity\Control\Peer\Chat;
use Zored\Telegram\Entity\Control\Peer\PeerFactory;
use Zored\Telegram\Entity\Control\Peer\User;
use Zored\Telegram\Entity\General\AbstractEntity;
use Zored\Telegram\Entity\User as EntityUser;

class PeerFactoryTest extends TestCase
{
    /**
     * @expectedException \Zored\Telegram\Entity\Control\Peer\Exception\PeerFactoryException
     */
    public function testCreateByEntity(): void
    {
        $id = 123;
        $this->assertInstanceOf(
            User::class,
            $result = PeerFactory::createByEntity(
                (new EntityUser())->setId($id)
            )
        );
        $this->assertSame($id, $result->getId());

        $this->assertInstanceOf(
            Chat::class,
            $result = PeerFactory::createByEntity(
                (new EntityChat())->setId($id)
            )
        );
        $this->assertSame($id, $result->getId());

        PeerFactory::createByEntity($this->createMock(AbstractEntity::class));
    }
}
