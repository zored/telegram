<?php

namespace Zored\Telegram\Madeline\Config\Builder;

use Zored\Telegram\Madeline\Config\Config;

/**
 * @codeCoverageIgnore
 */
final class EnvConfigFactory implements ConfigFactoryInterface
{
    public function create(): Config
    {
        return (new Config(
            getenv('TELEGRAM_API_ID'),
            getenv('TELEGRAM_API_HASH'),
            getenv('TELEGRAM_PHONE') ?: null,
            getenv('TELEGRAM_SESSION'),
            getenv('TELEGRAM_BOT_TOKEN') ?: null
        ))->setLogLevel(getenv('TELEGRAM_LOG_LEVEL'));
    }
}
