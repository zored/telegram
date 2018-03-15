<?php

namespace Zored\Telegram\Madeline\Api;

use danog\MadelineProto\API;
use danog\MadelineProto\Exception;
use Zored\Telegram\Madeline\Config\ConfigInterface;
use Zored\Telegram\Madeline\Config\Extractor\ConfigExtractor;

/**
 * @codeCoverageIgnore
 * - because API takes a lot of time to load.
 */
final class ApiConstructor implements ApiConstructorInterface
{
    /**
     * @var ConfigInterface
     */
    private $config;

    /**
     * @var ConfigExtractor
     */
    private $configExtractor;

    public function __construct(ConfigInterface $config, ConfigExtractor $configExtractor)
    {
        $this->config = $config;
        $this->configExtractor = $configExtractor;
    }

    public function create(): API
    {
        try {
            return new API($this->config->getSessionPath());
        } catch (Exception $exception) {
            return new API($this->configExtractor->extract($this->config));
        }
    }
}
