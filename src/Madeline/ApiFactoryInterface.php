<?php

namespace Zored\Telegram\Madeline;

use danog\MadelineProto\API;
use Zored\Telegram\Madeline\Api\ApiConstructorInterface;
use Zored\Telegram\Madeline\Config\ConfigInterface;

interface ApiFactoryInterface
{
    public function create(ConfigInterface $config, ApiConstructorInterface $apiConstructor): API;
}
