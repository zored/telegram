<?php

namespace Zored\Telegram\Madeline;

use danog\MadelineProto\API;
use Zored\Telegram\Madeline\Api\ApiConstructorInterface;
use Zored\Telegram\Madeline\Auth\PromptInterface;
use Zored\Telegram\Madeline\Config\Config;

interface ApiFactoryInterface
{
    public function create(Config $config, ApiConstructorInterface $apiConstructor, PromptInterface $prompt): API;
}
