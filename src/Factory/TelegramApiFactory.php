<?php

declare(strict_types=1);

namespace Zored\Telegram\Factory;

use Zored\Telegram\Madeline\Api\ApiConstructor;
use Zored\Telegram\Madeline\Api\ApiConstructorInterface;
use Zored\Telegram\Madeline\ApiFactory;
use Zored\Telegram\Madeline\ApiFactoryInterface;
use Zored\Telegram\Madeline\Config\Builder\ConfigFactoryInterface;
use Zored\Telegram\Madeline\Config\Builder\EnvConfigFactory;
use Zored\Telegram\Madeline\Config\ConfigInterface;
use Zored\Telegram\Madeline\Config\Extractor\ConfigExtractor;
use Zored\Telegram\Madeline\Config\Extractor\ConfigExtractorInterface;
use Zored\Telegram\Serializer\Jms\JmsSerializer;
use Zored\Telegram\Serializer\SerializerInterface;
use Zored\Telegram\TelegramApi;
use Zored\Telegram\TelegramApiInterface;

final class TelegramApiFactory implements TelegramApiFactoryInterface
{
    /**
     * @var ConfigExtractorInterface|null
     */
    private $configExtractor;

    /**
     * @var ApiConstructorInterface|null
     */
    private $apiConstructor;

    /**
     * @var ApiFactoryInterface|null
     */
    private $apiFactory;

    /**
     * @var SerializerInterface|null
     */
    private $serializer;

    /**
     * @var ConfigFactoryInterface|null
     */
    private $configFactory;

    /**
     * @var TelegramApi|null
     */
    private $api;

    public function create(): TelegramApiInterface
    {
        if ($this->api) {
            return $this->api;
        }

        $config = $this->setDefaults();

        return $this->api = new TelegramApi(
            $this->apiFactory->create($config, $this->apiConstructor),
            $this->serializer
        );
    }

    public function setConfigExtractor(ConfigExtractorInterface $configExtractor): self
    {
        $this->configExtractor = $configExtractor;

        return $this;
    }

    public function setApiConstructor(ApiConstructorInterface $apiConstructor): self
    {
        $this->apiConstructor = $apiConstructor;

        return $this;
    }

    public function setApiFactory(ApiFactoryInterface $apiFactory): self
    {
        $this->apiFactory = $apiFactory;

        return $this;
    }

    public function setSerializer(?SerializerInterface $serializer): self
    {
        $this->serializer = $serializer;

        return $this;
    }

    public function setConfigFactory(ConfigFactoryInterface $configFactory): self
    {
        $this->configFactory = $configFactory;

        return $this;
    }

    private function setDefaults(): ConfigInterface
    {
        $this->configExtractor = $this->configExtractor ?? new ConfigExtractor();
        $this->apiFactory = $this->apiFactory ?? new ApiFactory();
        $this->serializer = $this->serializer ?? new JmsSerializer();
        $this->configFactory = $this->configFactory ?? new EnvConfigFactory();

        $config = $this->configFactory->create();
        $this->apiConstructor = $this->apiConstructor ?? new ApiConstructor($config, $this->configExtractor);

        return $config;
    }
}
