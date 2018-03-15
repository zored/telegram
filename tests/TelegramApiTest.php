<?php

declare(strict_types=1);

namespace Zored\Telegram\Tests;

use danog\MadelineProto\API;
use danog\MadelineProto\contacts;
use danog\MadelineProto\messages;
use danog\MadelineProto\MTProto;
use danog\MadelineProto\RPCErrorException;
use PHPUnit\Framework\TestCase;
use Zored\Telegram\Entity\Bot\Update;
use Zored\Telegram\Entity\Contacts as ContactsEntity;
use Zored\Telegram\Entity\Dialogs;
use Zored\Telegram\Entity\User;
use Zored\Telegram\Serializer\SerializerInterface;
use Zored\Telegram\TelegramApi;

final class TelegramApiTest extends TestCase
{
    private const MOCK_RESPONSE = ['sample'];

    private $serializer;

    private $telegramApi;

    private $api;

    public function testGetChats(): void
    {
        $this->assertSame([], $this->telegramApi->getChats());
    }

    public function testGetDialogs(): void
    {
        $this->api->messages
            ->expects($this->once())
            ->method('getDialogs')
            ->willReturn(self::MOCK_RESPONSE);

        $this->serializer
            ->expects($this->once())
            ->method('deserialize')
            ->with(Dialogs::class, self::MOCK_RESPONSE)
            ->willReturn($dialogs = new Dialogs());

        $this->assertSame($dialogs, $this->telegramApi->getDialogs());
    }

    public function testSendMessage(): void
    {
        $this->api->messages
            ->expects($this->once())
            ->method('sendMessage')
            ->with([
                'peer' => ($peerType = TelegramApi::PEER_TYPE_USER) . '#' . ($peer = 1),
                'message' => $message = 'hello',
                'parse_mode' => $format = TelegramApi::FORMAT_HTML,
                'disable_web_page_preview' => false,
                'foo' => 'bar',
            ])
            ->willReturn(self::MOCK_RESPONSE);

        $this->expectDeserialize(Update\ShortSentMessage::class);

        $this->telegramApi->sendMessage($peer, $message, $peerType, $format, $etc = [
            'foo' => 'bar',
            'disable_web_page_preview' => false,
        ]);
    }

    public function testGetUpdates(): void
    {
        $this->api->API
            ->expects($this->once())
            ->method('get_updates')
            ->with([
                'offset' => $offset = 0,
                'limit' => $limit = 20,
                'timeout' => $timeout = 15,
            ])
            ->willReturn([self::MOCK_RESPONSE]);

        /** @var Update $update */
        $update = $this->expectDeserialize(Update::class);
        $update->setUpdateId(1);

        $this->assertSame([$update], $this->telegramApi->getUpdates($offset, $limit, $timeout));
    }

    public function testGetCurrentUser(): void
    {
        $this->api->API
            ->expects($this->once())
            ->method('get_self')
            ->with()
            ->willReturn(self::MOCK_RESPONSE);
        /** @var Update $user */
        $user = $this->expectDeserialize(User::class);
        $this->assertSame($user, $this->telegramApi->getCurrentUser());
    }

    public function testGetUpdatesDefaultOffset(): void
    {
        $updateId = 100;

        $this->api->API
            ->expects($this->exactly(2))
            ->method('get_updates')
            ->withConsecutive(
                [[
                    'offset' => 0,
                    'limit' => 50,
                    'timeout' => 10,
                ]],
                [[
                    'offset' => $updateId + 1,
                    'limit' => 50,
                    'timeout' => 10,
                ]]
            )
            ->willReturn([self::MOCK_RESPONSE]);

        /** @var Update $update */
        $update = $this->expectDeserialize(Update::class, 2);
        $update->setUpdateId($updateId);

        $this->assertSame([$update], $this->telegramApi->getUpdates());
        $this->assertSame([$update], $this->telegramApi->getUpdates());
    }

    /**
     * @expectedException \Zored\Telegram\Exception\TelegramApiException
     */
    public function testGetUpdatesError(): void
    {
        $this->api->API
            ->expects($this->once())
            ->method('get_updates')
            ->willThrowException($exception = new RPCErrorException());

        $this->telegramApi->getUpdates(10, 10);
    }

    public function testGetContacts(): void
    {
        $this->api->contacts
            ->expects($this->once())
            ->method('getContacts')
            ->willReturn(self::MOCK_RESPONSE);

        $contacts = $this->expectDeserialize(ContactsEntity::class);

        $this->assertSame($contacts, $this->telegramApi->getContacts());
    }

    private function expectDeserialize(string $class, int $exactly = 1)
    {
        $this->serializer
            ->expects($this->exactly($exactly))
            ->method('deserialize')
            ->with($class, self::MOCK_RESPONSE)
            ->willReturn($object = new $class());

        return $object;
    }

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        $this->serializer = $this->createMock(SerializerInterface::class);

        $this->api = $this->createMock(API::class);
        $this->api->API = $this->createMock(MTProto::class);
        $this->api->messages = $this->createMock(messages::class);
        $this->api->contacts = $this->createMock(contacts::class);

        $this->telegramApi = new TelegramApi($this->api, $this->serializer);
    }
}
