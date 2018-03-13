<?php

namespace Zored\Telegram\Madeline\Api;

use danog\MadelineProto\API;
use Zored\Telegram\Madeline\Config\Config;
use Zored\Telegram\Madeline\Config\ConfigExtractor;

final class ApiConstructor implements ApiConstructorInterface
{
    /**
     * @var Config
     */
    private $config;

    /**
     * @var ConfigExtractor
     */
    private $configExtractor;

    public function __construct(Config $config, ConfigExtractor $configExtractor)
    {
        $this->config = $config;
        $this->configExtractor = $configExtractor;
    }

    public function create(): API
    {
        // It takes to much time to create this object: therefore we isolate it.
        try {
            return new API($this->config->getSession());
        } catch (\danog\MadelineProto\Exception $exception) {
            return new API($this->configExtractor->extract($this->config));
        }
    }
}
