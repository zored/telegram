#!/usr/bin/env php
<?php
use Zored\Telegram\Factory\TelegramApiFactory;
use Zored\Telegram\Madeline\Config\Auth\AuthType;
use Zored\Telegram\Madeline\Config\Builder\EnvConfigFactory;
use Zored\Telegram\TelegramApiInterface;

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

$peer = $api->getDialogs()->findUserByFullName($name);
$peerType = TelegramApiInterface::PEER_TYPE_USER;
if (!$peer) {
    $peer = $api->getDialogs()->findChatByTitle($name);
    $peerType = TelegramApiInterface::PEER_TYPE_CHAT;
    if (!$peer) {
        echo "User and chat by '$name' not found.";
        exit(2);
    }
}

$api->sendMessage($peer->getId(), $message, $peerType);

