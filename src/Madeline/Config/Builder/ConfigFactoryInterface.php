<?php

namespace Zored\Telegram\Madeline\Config\Builder;

use Zored\Telegram\Madeline\Config\ConfigInterface;

interface ConfigFactoryInterface
{
    public function create(): ConfigInterface;
}
