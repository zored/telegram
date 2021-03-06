<?php

declare(strict_types=1);

namespace Zored\Telegram\Bot\Update;

use Zored\Telegram\Entity\Bot\Update;

interface UpdateHandlerInterface
{
    public function handle(Update $update): void;
}
