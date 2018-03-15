<?php

declare(strict_types=1);

namespace Zored\Telegram\Madeline\Auth\Handler;

use danog\MadelineProto\MTProto;
use Zored\Telegram\Madeline\Config\Auth\AuthConfigInterface;
use Zored\Telegram\Madeline\Config\Auth\BotAuth;

/**
 * @property BotAuth $config
 */
final class BotAuthHandler extends AbstractAuthHandler
{
    /**
     * {@inheritdoc}
     */
    public function suits(AuthConfigInterface $config): bool
    {
        return parent::suits($config) || $config instanceof BotAuth;
    }

    /**
     * {@inheritdoc}
     */
    public function auth(MTProto $proto): void
    {
        parent::auth($proto);

        if ($this->isAuthorized($proto)) {
            return;
        }

        $proto->bot_login($this->config->getToken());
    }
}
