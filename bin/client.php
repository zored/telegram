#!/usr/bin/env php
<?php

use Zored\Telegram\Entity\Control\Message\MarkdownMessage;
use Zored\Telegram\Entity\Control\Peer\PeerFactory;
use Zored\Telegram\Factory\TelegramApiFactory;
use Zored\Telegram\Madeline\Config\Auth\AuthType;
use Zored\Telegram\Madeline\Config\Builder\EnvConfigFactory;

require __DIR__ . '/../kernel.php';

$name = $argv[1] ?? null;
$message = $argv[2] ?? null;
if (!$name || !$message) {
    echo "Usage: bin/client.php 'user-name' 'message'";
    exit(2);
}

$api = (new TelegramApiFactory())
    // By default API is in bot mode. Change to client.
    ->setConfigFactory((new EnvConfigFactory())->setType(AuthType::CLIENT))
    ->create();

// Get peer (chat, user, channel).
$dialogs = $api->getDialogs();
$peer = PeerFactory::createByEntity(
    $dialogs->findUserByFullName($name) ??
    $dialogs->findChatByTitle($name)
);

$api->sendMessage(
    $peer,
    new MarkdownMessage($message)
);
