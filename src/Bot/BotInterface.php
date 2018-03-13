<?php

namespace Zored\Telegram\Bot;

use Zored\Telegram\Bot\Update\UpdateHandlerInterface;

interface BotInterface
{
    /**
     * @param UpdateHandlerInterface[] $updateHandlers
     */
    public function listen(array $updateHandlers): void;
}
