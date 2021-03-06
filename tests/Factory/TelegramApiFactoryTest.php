<?php

declare(strict_types=1);

namespace Zored\Telegram\Tests\Factory;

use PHPUnit\Framework\TestCase;
use Zored\Telegram\Factory\TelegramApiFactory;
use Zored\Telegram\Madeline\Api\ApiConstructorInterface;
use Zored\Telegram\Madeline\ApiFactoryInterface;
use Zored\Telegram\Madeline\Config\Builder\ConfigFactoryInterface;
use Zored\Telegram\Madeline\Config\Extractor\ConfigExtractorInterface;
use Zored\Telegram\Serializer\SerializerInterface;

class TelegramApiFactoryTest extends TestCase
{
    public function testCreate(): void
    {
        $factory = new TelegramApiFactory();
        $api = $factory
            ->setConfigExtractor($this->createMock(ConfigExtractorInterface::class))
            ->setApiConstructor($this->createMock(ApiConstructorInterface::class))
            ->setApiFactory($this->createMock(ApiFactoryInterface::class))
            ->setSerializer($this->createMock(SerializerInterface::class))
            ->setConfigFactory($this->createMock(ConfigFactoryInterface::class))
            ->create();
        $this->assertSame($api, $factory->create());
    }
}
