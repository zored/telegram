<?php

namespace Zored\Telegram\Util\Repeater;

interface RepeaterInterface
{
    public function repeat(callable $callable): void;
}
