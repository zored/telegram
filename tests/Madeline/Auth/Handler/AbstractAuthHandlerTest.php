<?php

declare(strict_types=1);

namespace Zored\Telegram\Tests\Madeline\Auth\Handler;

use danog\MadelineProto\MTProto;
use PHPUnit\Framework\TestCase;
use Zored\Telegram\Madeline\Auth\Handler\AbstractAuthHandler;
use Zored\Telegram\Madeline\Config\Auth\AuthConfigInterface;

final class AbstractAuthHandlerTest extends TestCase
{
    public function testFlowSuccess(): void
    {
        $handler = $this->mockHandler();
        $config = $this->createMock(AuthConfigInterface::class);
        $this->assertFalse($handler->suits($config));
        $handler->auth($this->createMock(MTProto::class));
        $this->assertAttributeSame($config, 'config', $handler);
    }

    /**
     * @expectedException \Zored\Telegram\Madeline\Auth\Handler\Exception\AuthHandlerException
     */
    public function testAuthWithoutSuits(): void
    {
        $this->mockHandler()->auth($this->createMock(MTProto::class));
    }

    /**
     * @dataProvider dataIsAuthorized
     */
    public function testIsAuthorized(int $authorized, bool $result): void
    {
        $proto = $this->createMock(MTProto::class);
        $proto->authorized = $authorized;

        $this->assertSame($result, (new class() extends AbstractAuthHandler {
            public function getIsAuthorized($proto)
            {
                return $this->isAuthorized($proto);
            }
        })->getIsAuthorized($proto));
    }

    public function dataIsAuthorized(): array
    {
        return [
            [MTProto::LOGGED_IN, true],
            [MTProto::NOT_LOGGED_IN, false],
        ];
    }

    private function mockHandler()
    {
        return $this->getMockForAbstractClass(AbstractAuthHandler::class);
    }
}
