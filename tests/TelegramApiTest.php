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
use Zored\Telegram\Entity\Control\Message\MessageInterface;
use Zored\Telegram\Entity\Control\Peer\PeerInterface;
use Zored\Telegram\Entity\Dialogs;
use Zored\Telegram\Entity\User;
use Zored\Telegram\Madeline\TelegramApi;
use Zored\Telegram\Serializer\SerializerInterface;

class TelegramApiTest extends TestCase
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
        $this->expectGetDialogs();
        $this->serializer
            ->expects($this->once())
            ->method('deserialize')
            ->with(Dialogs::class, self::MOCK_RESPONSE)
            ->willReturn($dialogs = new Dialogs());

        $this->assertSame($dialogs, $this->telegramApi->getDialogs());
    }

    public function testSendMessage(): void
    {
        $peer = $this->createMock(PeerInterface::class);
        $message = $this->createMock(MessageInterface::class);

        $peer
            ->expects($this->once())
            ->method('getId')
            ->with()
            ->willReturn($id = 1);
        $peer
            ->expects($this->once())
            ->method('getType')
            ->with()
            ->willReturn($type = 'user');

        $message
            ->expects($this->once())
            ->method('getContent')
            ->with()
            ->willReturn($messageContent = 'content');
        $message
            ->expects($this->once())
            ->method('getFormat')
            ->with()
            ->willReturn($format = 'HTML');
        $message
            ->expects($this->once())
            ->method('isLinkPreview')
            ->with()
            ->willReturn(true);

        $this->expectSendMessages($type, $id, $messageContent, $format);
        $this->expectDeserialize(Update\ShortSentMessage::class);

        $this->telegramApi->sendMessage($peer, $message, $etc = [
            'foo' => 'bar',
            'disable_web_page_preview' => false,
        ]);
    }

    public function testGetUpdates(): void
    {
        $offset = 0;
        $limit = 20;
        $timeout = 15;

        $this->expectGetUpdates($offset, $limit, $timeout);

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
        $this->expectGetContacts();

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
     * @expectedException \Zored\Telegram\Exception\TelegramApiLogicException
     * @dataProvider dataLogicExceptions
     */
    public function testLogicExceptions(\Closure $trigger): void
    {
        $trigger->call($this, []);

        $trigger($this->telegramApi);
    }

    public function dataLogicExceptions(): array
    {
        return [
            'getContacts' => [function (): void {
                $this->expectGetContacts();
                $this->telegramApi->getContacts();
            }],
            'getCurrentUser' => [function (): void {
                $this->telegramApi->getCurrentUser();
            }],
            'getDialogs' => [function (): void {
                $this->expectGetDialogs();
                $this->telegramApi->getDialogs();
            }],
            'getUpdates' => [function (): void {
                $this->expectGetUpdates(0, 50, 10);
                $this->telegramApi->getUpdates();
            }],
            'sendMessage' => [function (): void {
                $this->expectSendMessages('', 0, '', '');
                $this->telegramApi->sendMessage(
                    $this->createMock(PeerInterface::class),
                    $this->createMock(MessageInterface::class),
                    ['foo' => 'bar']
                );
            }],
        ];
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

    private function expectGetContacts(): void
    {
        $this->api->contacts
            ->expects($this->once())
            ->method('getContacts')
            ->willReturn(self::MOCK_RESPONSE);
    }

    private function expectGetDialogs(): void
    {
        $this->api->messages
            ->expects($this->once())
            ->method('getDialogs')
            ->willReturn(self::MOCK_RESPONSE);
    }

    /**
     * @param $offset
     * @param $limit
     * @param $timeout
     */
    private function expectGetUpdates($offset, $limit, $timeout): void
    {
        $this->api->API
            ->expects($this->once())
            ->method('get_updates')
            ->with([
                'offset' => $offset,
                'limit' => $limit,
                'timeout' => $timeout,
            ])
            ->willReturn([self::MOCK_RESPONSE]);
    }

    /**
     * @param $type
     * @param $id
     * @param $messageContent
     * @param $format
     */
    private function expectSendMessages($type, $id, $messageContent, $format): void
    {
        $this->api->messages
            ->expects($this->once())
            ->method('sendMessage')
            ->with([
                'peer' => $type . '#' . $id,
                'message' => $messageContent,
                'parse_mode' => $format,
                'disable_web_page_preview' => false,
                'foo' => 'bar',
            ])
            ->willReturn(self::MOCK_RESPONSE);
    }
}
