<?php

namespace Zored\Telegram;

use Zored\Telegram\Entity\Bot\Update;
use Zored\Telegram\Entity\Chat;
use Zored\Telegram\Entity\Contacts;
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

    public function sendMessage(int $peer, string $message, string $peerType = self::PEER_TYPE_USER, string $format = self::FORMAT_MARKDOWN, array $etc = []): Update\ShortSentMessage;

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
}
