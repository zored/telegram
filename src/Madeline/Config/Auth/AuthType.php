<?php

declare(strict_types=1);

namespace Zored\Telegram\Madeline\Config\Auth;

use Paillechat\Enum\Enum;

class AuthType extends Enum
{
    public const BOT = 'bot';
    public const CLIENT = 'client';
}
