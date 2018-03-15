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
        $config->setLogLevel($logLevel = LogLevel::NONE);
        $config->setAuthExpiresInSeconds($authExpiresInSeconds = 1);
        $this->assertSame(
            [
                'app_info' => ['api_id' => 0, 'api_hash' => ''],
                'logger' => [
                    'logger' => $logLevel,
                    'logger_level' => Logger::VERBOSE,
                ],
                'authorization' => ['default_temp_auth_key_expires_in' => 0],
            ],
            (new ConfigExtractor())->extract($config)
        );
    }
}
