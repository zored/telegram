<?php

declare(strict_types=1);

namespace Zored\Telegram\Bot;

use Zored\Telegram\Bot\Update\UpdateHandlerInterface;

interface BotInterface
{
    /**
     * @param UpdateHandlerInterface[] $updateHandlers
     *
     * @throws \Zored\Telegram\Exception\TelegramApiException
     */
    public function listen(array $updateHandlers): void;
}
