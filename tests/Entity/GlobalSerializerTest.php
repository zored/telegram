<?php

namespace Zored\Telegram\Tests\Entity;

use PHPUnit\Framework\TestCase;
use Zored\Telegram\Entity\Bot\Update;
use Zored\Telegram\Entity\Bot\Update\UpdateData;
use Zored\Telegram\Entity\Bot\Update\UpdateData\Message;
use Zored\Telegram\Entity\Chat;
use Zored\Telegram\Entity\Contacts;
use Zored\Telegram\Entity\Dialogs;
use Zored\Telegram\Entity\User;
use Zored\Telegram\Serializer\Jms\JmsSerializer;

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

        $message = new Message();
        $message->setId($id);
        $message->setOut($id);
        $message->setIn($id);
        $message->setFromId($id);
        $message->setToId($id);
        // TODO: check message.
        $message = $this->update($message);
        /** @var Message $message */
        $this->assertSame($id, $message->getId());
        $this->assertSame($id, $message->getOut());
        $this->assertSame($id, $message->getIn());
        $this->assertSame($id, $message->getFromId());
        $this->assertSame($id, $message->getToId());

        $updateData = new UpdateData();
        $updateData->setMessage($message);
        $updateData->setEntityType($entityType = 'updateNewChannelMessage');
        $updateData = $this->update($updateData);
        /** @var UpdateData $updateData */
        $this->assertEquals($message, $updateData->getMessage());
        $this->assertTrue($updateData->isNewMessage());
        $this->assertSame($entityType, $updateData->getEntityType());

        $update = new Update();
        $update->setUpdate($updateData);
        $update->setUpdateId($id);
        $update = $this->update($update);
        /** @var Update $update */
        $this->assertEquals($updateData, $update->getUpdate());
        $this->assertSame($id, $update->getUpdateId());
    }

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        $this->serializer = new JmsSerializer();
    }

    private function update($chat)
    {
        return $this->serializer->deserialize(
            get_class($chat),
            $this->serializer->serialize($chat)
        );
    }
}
