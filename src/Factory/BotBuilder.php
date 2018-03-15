<?php

declare(strict_types=1);

namespace Zored\Telegram\Factory;

use Zored\Telegram\Bot\BotInterface;
use Zored\Telegram\Bot\UpdateBot;

final class BotBuilder
{
    /**
     * @var TelegramApiFactoryInterface|null
     */
    private $telegramApiFactory;

    public function create(): BotInterface
    {
        $this->telegramApiFactory = $this->telegramApiFactory ?? new TelegramApiFactory();

        return new UpdateBot($this->telegramApiFactory->create());
    }

    public function setTelegramApiFactory(TelegramApiFactoryInterface $telegramApiFactory): self
    {
        $this->telegramApiFactory = $telegramApiFactory;

        return $this;
    }
}
