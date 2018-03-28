<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation;

use Zored\Telegram\Entity\Bot\Update;
use Zored\Telegram\Entity\Contacts;
use Zored\Telegram\Entity\Control\Message\MessageInterface;
use Zored\Telegram\Entity\Control\Peer\PeerInterface;
use Zored\Telegram\Entity\Dialogs;
use Zored\Telegram\Entity\User;
use Zored\Telegram\TelegramApiInterface;

final class TelegramApi implements TelegramApiInterface
{
    /**
     * @var TelegramCore
     */
    private $core;

    public function __construct(TelegramCore $core)
    {
        $this->core = $core;
    }

    /**
     * {@inheritdoc}
     */
    public function getContacts(): Contacts
    {
    }

    /**
     * {@inheritdoc}
     */
    public function sendMessage(PeerInterface $peer, MessageInterface $message, array $etc = []): Update\ShortSentMessage
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getChats(): array
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getDialogs(): Dialogs
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getUpdates(int $offset = 0, int $limit = 50, int $interval = 1): array
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrentUser(): User
    {
    }

    private function authenticate(): void
    {
        $this->core->query();
    }
}
