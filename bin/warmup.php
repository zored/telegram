#!/usr/bin/env php
<?php

use Zored\Telegram\Factory\TelegramApiFactory;
use Zored\Telegram\Madeline\Config\Auth\AuthType;
use Zored\Telegram\Madeline\Config\Builder\EnvConfigFactory;

require __DIR__ . '/../kernel.php';

foreach (AuthType::getConstList() as $type) {
    (new TelegramApiFactory())
        ->setConfigFactory((new EnvConfigFactory())->setType($type))
        ->create();
    sleep(5);
}
