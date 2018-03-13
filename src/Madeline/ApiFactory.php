<?php

namespace Zored\Telegram\Madeline;

use danog\MadelineProto\API;
use danog\MadelineProto\Exception;
use danog\MadelineProto\MTProto;
use danog\MadelineProto\RPCErrorException;
use Zored\Telegram\Madeline\Api\ApiConstructor;
use Zored\Telegram\Madeline\Api\ApiConstructorInterface;
use Zored\Telegram\Madeline\Auth\PromptInterface;
use Zored\Telegram\Madeline\Config\Config;
use Zored\Telegram\Madeline\Config\ConfigExtractor;

final class ApiFactory
{
    /**
     * @var MTProto
     */
    private $proto;

    /**
     * @throws \danog\MadelineProto\RPCErrorException
     * @throws \danog\MadelineProto\Exception
     */
    public function create(
        Config $config,
        ApiConstructorInterface $apiConstructor,
        PromptInterface $prompt
    ): API
    {
        $api = $apiConstructor->create();
        $api->session = $config->getSession();
        $this->proto = $api->API;

        $this->authorizeUser($config, $prompt);
        $this->authorizeBot($config);

        return $api;
    }

    /**
     * @throws Exception
     * @throws RPCErrorException
     */
    private function authorizeUser(Config $config, PromptInterface $prompt): void
    {
        if ($this->isAuthorized()) {
            return;
        }

        $this->proto->phone_login($config->getPhone());
        $result = $this->proto->complete_phone_login($prompt->prompt('SMS'));
        if ($result['_'] !== 'account.password') {
            return;
        }

        $password = $prompt->prompt('Password' . $result['hint'], true);
        $this->proto->complete_2fa_login($password);
    }

    private function isAuthorized(): bool
    {
        return $this->proto->authorized === MTProto::LOGGED_IN;
    }

    private function authorizeBot(Config $config): void
    {
        $token = $config->getBotToken();
        if (!$token) {
            return;
        }
        $this->proto->bot_login($token);
    }
}
