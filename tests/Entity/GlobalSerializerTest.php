<?php

namespace Zored\Telegram\Tests\Entity;

use PHPUnit\Framework\TestCase;
use Zored\Telegram\Entity\Chat;
use Zored\Telegram\Entity\Contacts;
use Zored\Telegram\Entity\Dialogs;
use Zored\Telegram\Entity\User;
use Zored\Telegram\Serializer\Jms\JmsSerializerSerializer;

final class GlobalSerializerTest extends TestCase
{
    private $serializer;

    public function testSerialize()
    {
        $chat = new Chat();
        $chat->setId($id = 1);
        $chat->setTitle($title = 'hello');
        $chat = $this->update($chat);
        /** @var Chat $chat */
        $this->assertSame($id, $chat->getId());
        $this->assertSame($title, $chat->getTitle());

        $user = new User();
        $user->setId($id);
        $user->setFirstName($firstName = 'Robert');
        $user->setLastName($lastName = 'Akhmerov');
        $user = $this->update($user);
        /** @var User $user */
        $this->assertSame($id, $user->getId());
        $this->assertSame($firstName, $user->getFirstName());
        $this->assertSame($lastName, $user->getLastName());

        $contacts = new Contacts();
        $contacts->setUsers($users = [$user]);
        $contacts = $this->update($contacts);
        /** @var Contacts $contacts */
        $this->assertEquals($users, $contacts->getUsers());

        $dialogs = new Dialogs();
        $dialogs->setUsers($users);
        $dialogs->setChats($chats = [$chat]);
        $dialogs = $this->update($dialogs);
        /** @var Dialogs $dialogs */
        $this->assertEquals($users, $dialogs->getUsers());
        $this->assertEquals($chats, $dialogs->getChats());
    }

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void
    {
        $this->serializer = new JmsSerializerSerializer();
    }

    private function update($chat)
    {
        return $this->serializer->deserialize(
            get_class($chat),
            $this->serializer->serialize($chat)
        );
    }
}
