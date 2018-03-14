<?php

namespace Zored\Telegram\Madeline\Config;

interface ConfigExtractorInterface
{
    public function extract(Config $config): array;
}
