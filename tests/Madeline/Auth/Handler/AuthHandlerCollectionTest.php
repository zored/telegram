<?php

declare(strict_types=1);

namespace Zored\Telegram\Tests\Madeline\Auth\Handler;

use PHPUnit\Framework\TestCase;
use Zored\Telegram\Madeline\Auth\Handler\AuthHandlerCollection;
use Zored\Telegram\Madeline\Auth\Handler\AuthHandlerInterface;
use Zored\Telegram\Madeline\Config\Auth\AuthConfigInterface;

final class AuthHandlerCollectionTest extends TestCase
{
    public function testGet(): void
    {
        $handler = $this->createMock(AuthHandlerInterface::class);
        $config = $this->createMock(AuthConfigInterface::class);
        $handler
            ->expects($this->once())
            ->method('suits')
            ->with($config)
            ->willReturn(true);
        $this->assertSame($handler, (new AuthHandlerCollection([$handler]))->get($config));
    }

    /**
     * @expectedException \Zored\Telegram\Madeline\Auth\Handler\Exception\AuthHandlerException
     */
    public function testGetNotFound(): void
    {
        (new AuthHandlerCollection([$this->createMock(AuthHandlerInterface::class)]))->get($this->createMock(AuthConfigInterface::class));
    }
}
