<?php

namespace Zored\Telegram\Tests\Madeline;

use danog\MadelineProto\API;
use danog\MadelineProto\MTProto;
use PHPUnit\Framework\TestCase;
use Zored\Telegram\Madeline\Api\ApiConstructorInterface;
use Zored\Telegram\Madeline\ApiFactory;
use Zored\Telegram\Madeline\Auth\PromptInterface;
use Zored\Telegram\Madeline\Config\Config;

final class ApiFactoryTest extends TestCase
{
    public function testCreate(): void
    {
        $apiConstructor = $this->createMock(ApiConstructorInterface::class);

        $api = $this->createMock(API::class);
        $api->API = $this->createMock(MTProto::class);
        $apiConstructor
            ->expects($this->once())
            ->method('create')
            ->willReturn($api);

        (new ApiFactory())->create(
            $config = new Config(1, '$hash', '$phone'),
            $apiConstructor,
            $this->createMock(PromptInterface::class)
        );
    }
}
