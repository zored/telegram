<?php

declare(strict_types=1);

namespace Zored\Telegram\Tests\Madeline\Auth\Handler;

use danog\MadelineProto\MTProto;
use PHPUnit\Framework\TestCase;
use Zored\Telegram\Madeline\Auth\Handler\BotAuthHandler;
use Zored\Telegram\Madeline\Config\Auth\AuthConfigInterface;
use Zored\Telegram\Madeline\Config\Auth\BotAuth;

final class BotAuthHandlerTest extends TestCase
{
    public function testSuitsWrongClass(): void
    {
        $this->assertFalse(
            (new BotAuthHandler())->suits(
                $this->createMock(AuthConfigInterface::class)
            ));
    }

    /**
     * @dataProvider dataAuth
     *
     * @throws \ReflectionException
     */
    public function testAuth(int $authorized, int $exactly): void
    {
        $handler = new BotAuthHandler();
        $this->assertTrue($handler->suits($config = new BotAuth('token')));
        $proto = $this->createMock(MTProto::class);
        $proto->authorized = $authorized;
        $proto->expects($this->exactly($exactly))->method('bot_login');
        $handler->auth($proto);
    }

    public function dataAuth(): array
    {
        return [[MTProto::NOT_LOGGED_IN, 1], [MTProto::LOGGED_IN, 0]];
    }
}
