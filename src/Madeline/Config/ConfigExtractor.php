<?php

namespace Zored\Telegram\Madeline\Config;

final class ConfigExtractor
{
    public function extract(Config $config)
    {
        /*
         * @see https://github.com/danog/MadelineProto#settings
         */
        return [
            'app_info' => [
                'api_id' => $config->getId(),
                'api_hash' => $config->getHash(),
            ],
            'logger' => ['logger' => $config->getLogLevel()],
            'authorization' => [
                'default_temp_auth_key_expires_in' => $config->getAuthExpiresInSeconds()
            ],
        ];
    }
}
