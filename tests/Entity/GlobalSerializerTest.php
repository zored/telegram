<?php

namespace Zored\Telegram\Tests\Entity;

use PHPUnit\Framework\TestCase;
use Zored\Telegram\Entity\Bot\Update;
use Zored\Telegram\Entity\Bot\Update\ShortSentMessage;
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

    public function testSerialize(): void
    {
        $chat = (new Chat())
            ->setId($id = 1)
            ->setTitle($title = 'hello');
        $this->update($chat);
        $this->assertSame($id, $chat->getId());
        $this->assertSame($title, $chat->getTitle());

        $user = (new User())
            ->setId($id)
            ->setFirstName($firstName = 'Robert')
            ->setLastName($lastName = 'Akhmerov');
        $this->update($user);
        $this->assertSame($id, $user->getId());
        $this->assertSame($firstName, $user->getFirstName());
        $this->assertSame($lastName, $user->getLastName());

        $contacts = (new Contacts())->setUsers($users = [$user]);
        $this->update($contacts);
        $this->assertEquals($users, $contacts->getUsers());

        $dialogs = (new Dialogs())
            ->setUsers($users)
            ->setChats($chats = [$chat]);
        $this->update($dialogs);
        $this->assertEquals($users, $dialogs->getUsers());
        $this->assertEquals($chats, $dialogs->getChats());

        $message = (new Message())
            ->setId($id)
            ->setOut($id)
            ->setIn($id)
            ->setFromId($id)
            ->setToId($id)
            ->setMessage($text = 'hello world');
        $this->update($message);
        $this->assertSame($id, $message->getId());
        $this->assertSame($id, $message->getOut());
        $this->assertSame($id, $message->getIn());
        $this->assertSame($id, $message->getFromId());
        $this->assertSame($id, $message->getToId());
        $this->assertSame($text, $message->getMessage());

        $updateData = (new UpdateData())->setMessage($message);
        $updateData->setEntityType($entityType = 'updateNewChannelMessage');
        $this->update($updateData);
        $this->assertEquals($message, $updateData->getMessage());
        $this->assertTrue($updateData->isNewMessage());
        $this->assertFalse($updateData->isIdUpdate());
        $this->assertSame($entityType, $updateData->getEntityType());

        $shortSentMessage = (new ShortSentMessage())->setId($id);
        $shortSentMessage->setEntityType($entityType);
        $this->update($shortSentMessage);
        $this->assertSame($id, $shortSentMessage->getId());
        $this->assertSame($entityType, $shortSentMessage->getEntityType());

        $update = (new Update())
            ->setUpdate($updateData)
            ->setUpdateId($id);
        $this->update($update);
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

    private function update(&$object): void
    {
        $object = $this->serializer->deserialize(
            \get_class($object),
            $this->serializer->serialize($object)
        );
    }
}
