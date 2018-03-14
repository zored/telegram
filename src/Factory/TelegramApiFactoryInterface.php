<?php

namespace Zored\Telegram\Factory;

use Zored\Telegram\TelegramApiInterface;

interface TelegramApiFactoryInterface
{
    public function create(): TelegramApiInterface;
}
