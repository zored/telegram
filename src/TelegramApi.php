<?php

namespace Zored\Telegram;

use danog\MadelineProto\API;
use danog\MadelineProto\MTProto;
use danog\MadelineProto\RPCErrorException;
use Zored\Telegram\Entity\Bot\Update;
use Zored\Telegram\Entity\Contacts;
use Zored\Telegram\Entity\Dialogs;
use Zored\Telegram\Exception\TelegramApiException;
use Zored\Telegram\Serializer\SerializerInterface;

final class TelegramApi implements TelegramApiInterface
{
    /**
     * @var API
     */
    private $api;

    /**
     * @var MTProto
     */
    private $proto;

    /**
     * @var SerializerInterface
     */
    private $serializer;

    /**
     * {@inheritdoc}
     */
    public function __construct(API $api, SerializerInterface $serializer)
    {
        $this->api = $api;
        $this->proto = $api->API;
        $this->serializer = $serializer;
    }

    /**
     * {@inheritdoc}
     */
    public function getContacts(): Contacts
    {
        /** @var array $response */
        $response = $this->api->contacts->getContacts(['hash' => 0]);

        /** @noinspection PhpIncompatibleReturnTypeInspection */
        return $this->serializer->deserialize(Contacts::class, $response);
    }

    /**
     * {@inheritdoc}
     */
    public function sendMessage(
        int $peer,
        string $message,
        string $peerType = self::PEER_TYPE_USER,
        string $format = self::FORMAT_MARKDOWN,
        array $etc = []
    ): void {
        $this->api->messages->sendMessage(array_merge([
            'peer' => $peerType . '#' . $peer,
            'message' => $message,
            'parse_mode' => $format,
            'disable_web_page_preview' => true,
        ], $etc));
    }

    /**
     * {@inheritdoc}
     */
    public function getChats(): array
    {
        $chats = $this->api->messages->getChats(['id' => 0]);

        // TODO: implement
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function getDialogs(): Dialogs
    {
        /** @var array $response */
        $response = $this->api->messages->getDialogs([
            'offset_date' => 0,
            'offset_id' => 0,
            'limit' => 100,
        ]);

        /** @noinspection PhpIncompatibleReturnTypeInspection */
        return $this->serializer->deserialize(Dialogs::class, $response);
    }

    /**
     * {@inheritdoc}
     */
    public function getUpdates(int $offset = 0, int $limit = 50, int $timeout = 10): array
    {
        try {
            $updates = $this->proto->get_updates([
                'offset' => $offset,
                'limit' => $limit,
                'timeout' => $timeout,
            ]);
        } catch (RPCErrorException $apiException) {
            throw TelegramApiException::becauseOfApiException($apiException);
        }

        return array_map([$this, 'createUpdate'], $updates);
    }

    private function createUpdate(array $update): Update
    {
        /** @noinspection PhpIncompatibleReturnTypeInspection */
        return $this->serializer->deserialize(Update::class, $update);
    }
}
