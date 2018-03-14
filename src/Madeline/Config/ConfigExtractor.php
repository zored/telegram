<?php

namespace Zored\Telegram\Madeline\Config;

use danog\MadelineProto\Logger;

final class ConfigExtractor implements ConfigExtractorInterface
{
    public function extract(Config $config): array
    {
        /*
         * @see https://docs.madelineproto.xyz/FULL_README.html#settings
         */
        return [
            'app_info' => [
                'api_id' => $config->getId(),
                'api_hash' => $config->getHash(),
            ],
            'logger' => [
                'logger' => $config->getLogLevel(),
                'logger_level' => Logger::VERBOSE,
            ],
            'authorization' => [
                'default_temp_auth_key_expires_in' => $config->getAuthExpiresInSeconds(),
            ],
        ];
    }
}
