<?php

declare(strict_types=1);

namespace Zored\Telegram\Madeline\Api;

use danog\MadelineProto\API;
use danog\MadelineProto\Exception;
use Zored\Telegram\Madeline\Config\ConfigInterface;
use Zored\Telegram\Madeline\Config\Extractor\ConfigExtractorInterface;

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
     * @var ConfigExtractorInterface
     */
    private $configExtractor;

    public function __construct(ConfigInterface $config, ConfigExtractorInterface $configExtractor)
    {
        $this->config = $config;
        $this->configExtractor = $configExtractor;
    }

    public function create(): API
    {
        $path = $this->config->getSessionPath();
        if (!file_exists($path)) {
            return $this->createFromConfig();
        }

        try {
            return $this->createFromSessionPath($path);
        } catch (Exception $exception) {
            return $this->createFromConfig();
        }
    }

    private function createFromConfig(): API
    {
        return new API($this->configExtractor->extract($this->config));
    }

    /**
     * @throws Exception
     */
    private function     createFromSessionPath(string $path): API
    {
        return new API($path);
    }
}
