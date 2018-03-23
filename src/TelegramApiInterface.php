<?php

declare(strict_types=1);

namespace Zored\Telegram;

use Zored\Telegram\Entity\Bot\Update;
use Zored\Telegram\Entity\Chat;
use Zored\Telegram\Entity\Contacts;
use Zored\Telegram\Entity\Control\Message\MessageInterface;
use Zored\Telegram\Entity\Control\Peer\PeerInterface;
use Zored\Telegram\Entity\Dialogs;
use Zored\Telegram\Entity\User;
use Zored\Telegram\Exception\TelegramApiException;

interface TelegramApiInterface
{
    public const PEER_TYPE_USER = 'user';
    public const PEER_TYPE_CHAT = 'chat';
    public const PEER_TYPE_CHANNEL = 'channel';

    public const FORMAT_MARKDOWN = 'Markdown';
    public const FORMAT_HTML = 'HTML';

    public function getContacts(): Contacts;

    public function sendMessage(PeerInterface $peer, MessageInterface $message, array $etc = []): Update\ShortSentMessage;

    /**
     * @return Chat[]
     */
    public function getChats(): array;

    public function getDialogs(): Dialogs;

    /**
     * @return Update[]
     *
     * @throws TelegramApiException
     */
    public function getUpdates(int $offset = 0, int $limit = 50, int $interval = 1): array;

    /**
     * @return User
     */
    public function getCurrentUser(): User;
}
