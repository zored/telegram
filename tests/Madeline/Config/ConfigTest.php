<?php

declare(strict_types=1);

namespace Zored\Telegram\Tests\Madeline\Config;

use PHPUnit\Framework\TestCase;
use Zored\Telegram\Madeline\Config\Auth\AuthConfigInterface;
use Zored\Telegram\Madeline\Config\Config;
use Zored\Telegram\Madeline\Config\LogLevel;

final class ConfigTest extends TestCase
{
    public function testGetters(): void
    {
        $config = (new Config(
            $id = 1,
            $hash = 'hash',
            $auth = $this->createMock(AuthConfigInterface::class),
            $session = '/some/where'
        ))
            ->setAuthExpiresInSeconds($authExpiresInSeconds = 1)
            ->setLogLevel($logLevel = LogLevel::NONE);

        $this->assertSame($session, $config->getSessionPath());
        $this->assertSame($authExpiresInSeconds, $config->getAuthExpiresInSeconds());
        $this->assertSame($logLevel, $config->getLogLevel());
        $this->assertSame($auth, $config->getAuth());
        $this->assertSame($hash, $config->getHash());
        $this->assertSame($id, $config->getId());

        $config->setSessionPath($session = 'session2');
        $this->assertSame($session, $config->getSessionPath());
    }
}
