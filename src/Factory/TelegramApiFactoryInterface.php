<?php

declare(strict_types=1);

namespace Zored\Telegram\Factory;

use Zored\Telegram\TelegramApiInterface;

interface TelegramApiFactoryInterface
{
    public function create(): TelegramApiInterface;
}
