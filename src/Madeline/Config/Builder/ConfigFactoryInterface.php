<?php

declare(strict_types=1);

namespace Zored\Telegram\Madeline\Config\Builder;

use Zored\Telegram\Madeline\Config\ConfigInterface;

interface ConfigFactoryInterface
{
    public function create(): ConfigInterface;
}
