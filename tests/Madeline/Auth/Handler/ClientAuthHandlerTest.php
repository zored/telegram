<?php

namespace Zored\Telegram\Tests\Madeline\Auth\Handler;

use danog\MadelineProto\MTProto;
use PHPUnit\Framework\TestCase;
use Zored\Telegram\Madeline\Auth\Handler\ClientAuthHandler;
use Zored\Telegram\Madeline\Auth\Prompt\PromptInterface;
use Zored\Telegram\Madeline\Config\Auth\AuthConfigInterface;
use Zored\Telegram\Madeline\Config\Auth\ClientAuth;

final class ClientAuthHandlerTest extends TestCase
{
    private const EXPECTED_PASSWORD = 'pass';
    private const EXPECTED_CODE = '123';

    public function testSuitsWrongClass(): void
    {
        $this->assertFalse(
            (new ClientAuthHandler())->suits(
                $this->createMock(AuthConfigInterface::class)
            ));
    }

    /**
     * @dataProvider dataAuth
     *
     * @throws \ReflectionException
     */
    public function testAuth(int $authorized, int $authExactly, array $promptResults = [], string $password = null, string $code = null): void
    {
        $handler = new ClientAuthHandler();
        $phone = '+7123';
        $prompt = $this->createMock(PromptInterface::class);
        $prompt
            ->expects($this->exactly(\count($promptResults)))
            ->willReturnOnConsecutiveCalls(...$promptResults)
            ->method('prompt');
        $this->assertTrue($handler->suits($config = new ClientAuth($phone, $password, $code, $prompt)));
        $proto = $this->createMock(MTProto::class);
        $proto->authorized = $authorized;
        $proto->expects($this->exactly($authExactly))->method('phone_login')->with($phone);
        $proto
            ->expects($this->exactly($authExactly))
            ->method('complete_phone_login')
            ->with(self::EXPECTED_CODE)
            ->willReturn(['_' => 'account.password']);
        $proto
            ->expects($this->exactly($authExactly))
            ->method('complete_2fa_login')
            ->with(self::EXPECTED_PASSWORD);
        $handler->auth($proto);
    }

    public function dataAuth(): array
    {
        return [
            'no login' => [MTProto::LOGGED_IN, 0],
            'login with data' => [MTProto::NOT_LOGGED_IN, 1, [], self::EXPECTED_PASSWORD, self::EXPECTED_CODE],
            'prompt code' => [MTProto::NOT_LOGGED_IN, 1, [self::EXPECTED_CODE], self::EXPECTED_PASSWORD, null],
            'prompt password' => [MTProto::NOT_LOGGED_IN, 1, [self::EXPECTED_PASSWORD], null, self::EXPECTED_CODE],
            'prompt all' => [MTProto::NOT_LOGGED_IN, 1, [self::EXPECTED_CODE, self::EXPECTED_PASSWORD], null, null],
        ];
    }
}
