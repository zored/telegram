<?php

namespace Zored\Telegram\Madeline;

use danog\MadelineProto\API;
use danog\MadelineProto\Exception;
use danog\MadelineProto\MTProto;
use danog\MadelineProto\RPCErrorException;
use Zored\Telegram\Madeline\Api\ApiConstructorInterface;
use Zored\Telegram\Madeline\Auth\PromptInterface;
use Zored\Telegram\Madeline\Config\Config;

final class ApiFactory implements ApiFactoryInterface
{
    /**
     * @var MTProto
     */
    private $proto;

    public function create(
        Config $config,
        ApiConstructorInterface $apiConstructor,
        PromptInterface $prompt
    ): API {
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
        $phone = $config->getPhone();

        if (!$phone || $this->isAuthorized()) {
            return;
        }

        $this->proto->phone_login($phone);
        $result = $this->proto->complete_phone_login($prompt->prompt('SMS'));
        if ('account.password' !== $result['_']) {
            return;
        }

        $password = $prompt->prompt('Password' . $result['hint'], true);
        $this->proto->complete_2fa_login($password);
    }

    private function isAuthorized(): bool
    {
        return MTProto::LOGGED_IN === $this->proto->authorized;
    }

    private function authorizeBot(Config $config): void
    {
        $token = $config->getBotToken();
        if (!$token || MTProto::LOGGED_IN === $this->proto->authorized) {
            return;
        }
        $this->proto->bot_login($token);
    }
}
