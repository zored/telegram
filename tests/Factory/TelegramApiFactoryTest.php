<?php

namespace Zored\Telegram\Tests\Factory;

use PHPUnit\Framework\TestCase;
use Zored\Telegram\Factory\TelegramApiFactory;
use Zored\Telegram\Madeline\Api\ApiConstructorInterface;
use Zored\Telegram\Madeline\ApiFactoryInterface;
use Zored\Telegram\Madeline\Config\Builder\ConfigFactoryInterface;
use Zored\Telegram\Madeline\Config\Extractor\ConfigExtractorInterface;
use Zored\Telegram\Serializer\SerializerInterface;

final class TelegramApiFactoryTest extends TestCase
{
    public function testCreate()
    {
        (new TelegramApiFactory())
            ->setConfigExtractor($this->createMock(ConfigExtractorInterface::class))
            ->setApiConstructor($this->createMock(ApiConstructorInterface::class))
            ->setApiFactory($this->createMock(ApiFactoryInterface::class))
            ->setSerializer($this->createMock(SerializerInterface::class))
            ->setConfigFactory($this->createMock(ConfigFactoryInterface::class))
            ->create();

        $this->assertTrue(true, 'No assertions.');
    }
}
