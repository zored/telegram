<?php

namespace Zored\Telegram\Tests\Madeline;

use danog\MadelineProto\API;
use danog\MadelineProto\MTProto;
use PHPUnit\Framework\TestCase;
use Zored\Telegram\Madeline\Api\ApiConstructorInterface;
use Zored\Telegram\Madeline\ApiFactory;
use Zored\Telegram\Madeline\Auth\Handler\AuthHandlerCollectionInterface;
use Zored\Telegram\Madeline\Config\Auth\ClientAuth;
use Zored\Telegram\Madeline\Config\ConfigInterface;

final class ApiFactoryTest extends TestCase
{
    public function testCreate(): void
    {
        $config = $this->createMock(ConfigInterface::class);
        $config
            ->expects($this->once())
            ->method('getAuth')
            ->willReturn(new ClientAuth('+7'));

        (new ApiFactory())->create($config, $this->mockApiConstructor());
    }

    public function testCreateHandlers()
    {
        $handlers = $this->createMock(AuthHandlerCollectionInterface::class);
        $handlers->expects($this->once())->method('get');

        (new ApiFactory($handlers))->create(
            $this->createMock(ConfigInterface::class),
            $this->mockApiConstructor()
        );
    }

    /**
     * @return \PHPUnit\Framework\MockObject\MockObject|ApiConstructorInterface
     */
    private function mockApiConstructor()
    {
        $apiConstructor = $this->createMock(ApiConstructorInterface::class);
        $api = $this->createMock(API::class);
        $api->API = $this->createMock(MTProto::class);

        $apiConstructor
            ->expects($this->once())
            ->method('create')
            ->willReturn($api);

        return $apiConstructor;
    }
}
