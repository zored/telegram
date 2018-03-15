<?php

declare(strict_types=1);

namespace Zored\Telegram\Madeline;

use danog\MadelineProto\API;
use Zored\Telegram\Exception\TelegramApiFactoryException;
use Zored\Telegram\Madeline\Api\ApiConstructorInterface;
use Zored\Telegram\Madeline\Auth\Handler\Exception\AuthHandlerException;
use Zored\Telegram\Madeline\Config\ConfigInterface;

interface ApiFactoryInterface
{
    /**
     * @throws TelegramApiFactoryException
     * @throws AuthHandlerException
     */
    public function create(ConfigInterface $config, ApiConstructorInterface $apiConstructor): API;
}
