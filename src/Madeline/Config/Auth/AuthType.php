<?php

namespace Zored\Telegram\Madeline\Config\Auth;

use Paillechat\Enum\Enum;

final class AuthType extends Enum
{
    public const BOT = 'bot';
    public const CLIENT = 'client';
}
