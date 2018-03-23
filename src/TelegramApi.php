<?php

declare(strict_types=1);

namespace Zored\Telegram;

use danog\MadelineProto\API;
use danog\MadelineProto\MTProto;
use danog\MadelineProto\RPCErrorException;
use Zored\Telegram\Entity\Bot\Update;
use Zored\Telegram\Entity\Bot\Update\ShortSentMessage;
use Zored\Telegram\Entity\Contacts;
use Zored\Telegram\Entity\Control\Message\MessageInterface;
use Zored\Telegram\Entity\Control\Peer\PeerInterface;
use Zored\Telegram\Entity\Dialogs;
use Zored\Telegram\Entity\User;
use Zored\Telegram\Exception\TelegramApiException;
use Zored\Telegram\Exception\TelegramApiLogicException;
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

        $contacts = $this->hydrate(Contacts::class, $response);
        if (!$contacts instanceof Contacts) {
            throw TelegramApiLogicException::becauseOfWrongType($contacts, Contacts::class);
        }

        return $contacts;
    }

    /**
     * {@inheritdoc}
     */
    public function sendMessage(
        PeerInterface $peer,
        MessageInterface $message,
        array $etc = []
    ): ShortSentMessage {
        /** @var array $response */
        $response = $this->api->messages->sendMessage(array_merge([
            'peer' => $peer->getType() . '#' . $peer->getId(),
            'message' => $message->getContent(),
            'parse_mode' => $message->getFormat(),
            'disable_web_page_preview' => $message->isLinkPreview(),
        ], $etc));

        $shortSentMessage = $this->hydrate(ShortSentMessage::class, $response);
        if (!$shortSentMessage instanceof ShortSentMessage) {
            throw TelegramApiLogicException::becauseOfWrongType($shortSentMessage, ShortSentMessage::class);
        }

        return $shortSentMessage;
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

        $dialogs = $this->hydrate(Dialogs::class, $response);
        if (!$dialogs instanceof Dialogs) {
            throw TelegramApiLogicException::becauseOfWrongType($dialogs, Dialogs::class);
        }

        return $dialogs;
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrentUser(): User
    {
        $response = $this->proto->get_self() ?: [];

        $user = $this->hydrate(User::class, $response);
        if (!$user instanceof User) {
            throw TelegramApiLogicException::becauseOfWrongType($user, User::class);
        }

        return $user;
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

    /**
     * @throws TelegramApiLogicException
     */
    private function createUpdate(array $data): Update
    {
        $update = $this->hydrate(Update::class, $data);
        if (!$update instanceof Update) {
            throw TelegramApiLogicException::becauseOfWrongType($update, Update::class);
        }

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
