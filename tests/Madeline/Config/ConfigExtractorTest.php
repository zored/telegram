<?php

namespace Zored\Telegram\Tests\Madeline\Config;

use danog\MadelineProto\Logger;
use PHPUnit\Framework\TestCase;
use Zored\Telegram\Madeline\Config\Config;
use Zored\Telegram\Madeline\Config\ConfigExtractor;
use Zored\Telegram\Madeline\Config\LogLevel;

final class ConfigExtractorTest extends TestCase
{
    public function testExtract(): void
    {
        $config = new Config($id = 1, $hash = 'hash', $phone = 'phone', $botToken = 'token');
        $config->setLogLevel($logLevel = LogLevel::NONE);
        $config->setAuthExpiresInSeconds($authExpiresInSeconds = 1);
        $this->assertSame(
            [
                'app_info' => ['api_id' => $id, 'api_hash' => $hash],
                'logger' => [
                    'logger' => $logLevel,
                    'logger_level' => Logger::VERBOSE,
                ],
                'authorization' => ['default_temp_auth_key_expires_in' => $authExpiresInSeconds],
            ],
            (new ConfigExtractor())->extract($config)
        );
    }
}
