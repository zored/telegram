<?php

namespace Zored\Telegram\Madeline;

use danog\MadelineProto\API;
use danog\MadelineProto\MTProto;
use Zored\Telegram\Madeline\Api\ApiConstructorInterface;
use Zored\Telegram\Madeline\Auth\Handler\AuthHandlerCollection;
use Zored\Telegram\Madeline\Auth\Handler\AuthHandlerCollectionInterface;
use Zored\Telegram\Madeline\Auth\Handler\BotAuthHandler;
use Zored\Telegram\Madeline\Auth\Handler\ClientAuthHandler;
use Zored\Telegram\Madeline\Auth\Handler\Exception\AuthHandlerException;
use Zored\Telegram\Madeline\Config\ConfigInterface;

final class ApiFactory implements ApiFactoryInterface
{
    /**
     * @var AuthHandlerCollectionInterface
     */
    private $handlers;

    public function __construct(AuthHandlerCollectionInterface $handlers = null)
    {
        $this->handlers = $handlers ?? new AuthHandlerCollection([
            new ClientAuthHandler(),
            new BotAuthHandler(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function create(
        ConfigInterface $config,
        ApiConstructorInterface $apiConstructor
    ): API {
        $api = $apiConstructor->create();
        $api->session = $config->getSessionPath();
        $this->auth($config, $api->API);

        return $api;
    }

    /**
     * @throws AuthHandlerException
     */
    private function auth(ConfigInterface $config, MTProto $proto): void
    {
        $this->handlers->get($config->getAuth())->auth($proto);
    }
}
