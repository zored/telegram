<?php

declare(strict_types=1);

namespace Zored\Telegram\Util\Repeater;

interface RepeaterInterface
{
    public function repeat(callable $callable): void;
}
