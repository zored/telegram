<?php

namespace Zored\Telegram\Tests\Madeline\Config;

use PHPUnit\Framework\TestCase;
use Zored\Telegram\Madeline\Config\Config;
use Zored\Telegram\Madeline\Config\LogLevel;

final class ConfigTest extends TestCase
{
    public function testGetters()
    {
        $config = new Config(
            $id = 1,
            $hash = 'hash',
            $phone = '+7123456789',
            $session = 'session',
            $botToken = 'token'
        );
        $config->setAuthExpiresInSeconds($authExpiresInSeconds = 1);
        $config->setLogLevel($logLevel = LogLevel::NONE);

        $this->assertSame($session, $config->getSession());
        $this->assertSame($botToken, $config->getBotToken());
        $this->assertSame($phone, $config->getPhone());
        $this->assertSame($authExpiresInSeconds, $config->getAuthExpiresInSeconds());
        $this->assertSame($logLevel, $config->getLogLevel());

        $config->setSession($session = 'session2');
        $this->assertSame($session, $config->getSession());
    }
}
