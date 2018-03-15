<?php

namespace Zored\Telegram\Madeline\Auth\Handler;

use danog\MadelineProto\MTProto;
use Zored\Telegram\Madeline\Config\Auth\AuthConfigInterface;
use Zored\Telegram\Madeline\Config\Auth\ClientAuth;

/**
 * @property ClientAuth $config
 */
final class ClientAuthHandler extends AbstractAuthHandler
{
    /**
     * {@inheritdoc}
     */
    public function suits(AuthConfigInterface $config): bool
    {
        return parent::suits($config) || $config instanceof ClientAuth;
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

        $proto->phone_login($this->config->getPhone());
        $result = $proto->complete_phone_login($this->config->getCode());
        if ('account.password' !== $result['_']) {
            return;
        }

        $proto->complete_2fa_login($this->config->getPassword());
    }
}
