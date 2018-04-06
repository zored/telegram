<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation;

/**
 * Implementation of basic Telegram interactions.
 */
interface TelegramCoreInterface
{
    public function query($object): void;
}
