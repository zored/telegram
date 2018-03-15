<?php

namespace Zored\Telegram\Tests\Madeline;

use danog\MadelineProto\API;
use danog\MadelineProto\MTProto;
use PHPUnit\Framework\TestCase;
use Zored\Telegram\Madeline\Api\ApiConstructorInterface;
use Zored\Telegram\Madeline\ApiFactory;
use Zored\Telegram\Madeline\Auth\Handler\AuthHandlerCollectionInterface;
use Zored\Telegram\Madeline\Auth\Prompt\PromptInterface;
use Zored\Telegram\Madeline\Config\ConfigInterface;

final class ApiFactoryTest extends TestCase
{
    public function testCreate(): void
    {
        $apiConstructor = $this->createMock(ApiConstructorInterface::class);

        $api = $this->createMock(API::class);
        $api->API = $this->createMock(MTProto::class);
        $api->API->authorized = false;

        $apiConstructor
            ->expects($this->once())
            ->method('create')
            ->willReturn($api);

        (new ApiFactory(
            $this->createMock(AuthHandlerCollectionInterface::class)
        ))->create(
            $config = $this->createMock(ConfigInterface::class),
            $apiConstructor,
            $this->createMock(PromptInterface::class)
        );
    }
}
