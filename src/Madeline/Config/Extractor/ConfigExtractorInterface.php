<?php

declare(strict_types=1);

namespace Zored\Telegram\Madeline\Config\Extractor;

use Zored\Telegram\Madeline\Config\ConfigInterface;

interface ConfigExtractorInterface
{
    public function extract(ConfigInterface $config): array;
}
