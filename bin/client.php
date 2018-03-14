#!/usr/bin/env php
<?php
use Zored\Telegram\Factory\TelegramApiFactory;

require __DIR__ . '/../kernel.php';

$name = $argv[1] ?? null;
$message = $argv[2] ?? null;
if (!$name || !$message) {
    echo "Usage: bin/client.php 'user-name' 'message'";
    exit(2);
}

$api = (new TelegramApiFactory())->create();
$user = $api->getDialogs()->findUserByFullName($name);
if (!$user) {
    echo "User $name not found.";
    exit(1);
}

$api->sendMessage($user->getId(), $message);
