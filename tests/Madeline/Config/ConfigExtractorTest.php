<?php

declare(strict_types=1);

namespace Zored\Telegram\Tests\Madeline\Config;

use danog\MadelineProto\Logger;
use PHPUnit\Framework\TestCase;
use Zored\Telegram\Madeline\Config\ConfigInterface;
use Zored\Telegram\Madeline\Config\Extractor\ConfigExtractor;
use Zored\Telegram\Madeline\Config\LogLevel;

final class ConfigExtractorTest extends TestCase
{
    public function testExtract(): void
    {
        $config = $this->createMock(ConfigInterface::class);
        $config->expects($this->once())->method('getId')->with()->willReturn($id = 1);
        $config->expects($this->once())->method('getHash')->with()->willReturn($hash = '123');
        $config->expects($this->once())->method('getAuthExpiresInSeconds')->with()->willReturn($expires = 1234);
        $config->setLogLevel($logLevel = LogLevel::NONE);
        $config->setAuthExpiresInSeconds($authExpiresInSeconds = 1);
        $data = (new ConfigExtractor())->extract($config);
        $this->assertSame($id, $data['app_info']['api_id']);
        $this->assertSame($hash, $data['app_info']['api_hash']);
        $this->assertSame($logLevel, $data['logger']['logger']);
        $this->assertSame($expires, $data['authorization']['default_temp_auth_key_expires_in']);
    }
}
