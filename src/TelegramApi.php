<?php

namespace Zored\Telegram;

use danog\MadelineProto\API;
use danog\MadelineProto\MTProto;
use danog\MadelineProto\RPCErrorException;
use Zored\Telegram\Entity\Bot\Update;
use Zored\Telegram\Entity\Bot\Update\ShortSentMessage;
use Zored\Telegram\Entity\Contacts;
use Zored\Telegram\Entity\Dialogs;
use Zored\Telegram\Entity\User;
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
     * @var int
     */
    private $nextUpdateId = 0;

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
        return $this->hydrate(Contacts::class, $response);
    }

    /**
     * {@inheritdoc}
     */
    public function sendMessage(
        int $peer, // TODO: Create Peer class
        string $message,
        string $peerType = self::PEER_TYPE_USER,
        string $format = self::FORMAT_MARKDOWN,
        array $etc = []
    ): ShortSentMessage {
        /** @var array $response */
        $response = $this->api->messages->sendMessage(array_merge([
            'peer' => $peerType . '#' . $peer,
            'message' => $message,
            'parse_mode' => $format,
            'disable_web_page_preview' => true,
        ], $etc));

        return $this->hydrate(ShortSentMessage::class, $response);
    }

    /**
     * {@inheritdoc}
     */
    public function getChats(): array
    {
        // $this->api->messages->getChats(['id' => 0]);

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
        return $this->hydrate(Dialogs::class, $response);
    }

    public function getCurrentUser(): User
    {
        $response = $this->proto->get_self() ?: [];

        return $this->hydrate(User::class, $response);
    }

    /**
     * {@inheritdoc}
     */
    public function getUpdates(int $offset = null, int $limit = 50, int $interval = 10): array
    {
        $offset = $offset ?? $this->nextUpdateId;
        try {
            $updates = $this->proto->get_updates([
                'offset' => $offset,
                'limit' => $limit,
                'timeout' => $interval,
            ]);
        } catch (RPCErrorException $apiException) {
            throw TelegramApiException::becauseOfApiException($apiException);
        }

        return array_map([$this, 'createUpdate'], $updates);
    }

    private function createUpdate(array $data): Update
    {
        /** @var Update $update */
        $update = $this->hydrate(Update::class, $data);

        $this->nextUpdateId = $update->getUpdateId() + 1;

        return $update;
    }

    /**
     * @param string $class
     * @param array $response
     *
     * @return object
     */
    private function hydrate(string $class, array $response)
    {
        return $this->serializer->deserialize($class, $response);
    }
}
