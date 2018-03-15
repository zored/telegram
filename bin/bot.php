#!/usr/bin/env php
<?php

use Zored\Telegram\Bot\Factory\BotFactory;
use Zored\Telegram\Bot\Update\UpdateHandlerInterface;
use Zored\Telegram\Entity\Bot\Update;
use Zored\Telegram\Factory\TelegramApiFactory;
use Zored\Telegram\TelegramApi;

require __DIR__ . '/../kernel.php';

(new BotFactory())
    ->setTelegramApiFactory($apiFactory = new TelegramApiFactory())
    ->create()
    ->listen([
        new class($apiFactory->create()) implements UpdateHandlerInterface {
            private $api;
            private $myId;

            public function __construct(TelegramApi $api)
            {
                $this->api = $api;
                $this->myId = $api->getCurrentUser()->getId();
            }

            /**
             * {@inheritdoc}
             */
            public function handle(Update $update): void
            {
                $message = $update->getUpdate()->getMessage();
                if (!$message || $this->myId === $message->getFromId()) {
                    return;
                }

                $this->api->sendMessage($message->getFromId(), '**You asked me for:** ' . $message->getMessage());
            }
        },
    ]);
