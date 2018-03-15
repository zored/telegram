<?php

namespace Zored\Telegram\Madeline\Auth\Handler;

use danog\MadelineProto\MTProto;
use Zored\Telegram\Madeline\Config\Auth\AuthConfigInterface;
use Zored\Telegram\Madeline\Config\Auth\BotAuth;

final class BotAuthHandler extends AbstractAuthHandler
{
    /**
     * @var BotAuth
     */
    protected $config;

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

        $token = $this->config->getToken();
        if (!$token || $this->isAuthorized($proto)) {
            return;
        }

        $proto->bot_login($token);
    }
}
