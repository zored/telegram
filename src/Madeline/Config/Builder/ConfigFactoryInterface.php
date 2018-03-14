<?php

namespace Zored\Telegram\Madeline\Config\Builder;

use Zored\Telegram\Madeline\Config\Config;

interface ConfigFactoryInterface
{
    public function create(): Config;
}
