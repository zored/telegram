<?php

namespace Zored\Telegram\Tests\Factory;

use PHPUnit\Framework\TestCase;
use Zored\Telegram\Factory\TelegramApiFactory;
use Zored\Telegram\Madeline\Api\ApiConstructorInterface;
use Zored\Telegram\Madeline\ApiFactoryInterface;
use Zored\Telegram\Madeline\Auth\PromptInterface;
use Zored\Telegram\Madeline\Config\Builder\ConfigFactoryInterface;
use Zored\Telegram\Madeline\Config\Config;
use Zored\Telegram\Madeline\Config\ConfigExtractorInterface;
use Zored\Telegram\Serializer\SerializerInterface;

final class TelegramApiFactoryTest extends TestCase
{
    public function testCreate()
    {
        $configFactory = $this->createMock(ConfigFactoryInterface::class);
        $configFactory
            ->expects($this->once())
            ->method('create')
            ->willReturn(new Config(0, '', ''));

        (new TelegramApiFactory())
            ->setConfigExtractor($this->createMock(ConfigExtractorInterface::class))
            ->setApiConstructor($this->createMock(ApiConstructorInterface::class))
            ->setApiFactory($this->createMock(ApiFactoryInterface::class))
            ->setPrompt($this->createMock(PromptInterface::class))
            ->setSerializer($this->createMock(SerializerInterface::class))
            ->setConfigFactory($configFactory)
            ->create();
    }
}
