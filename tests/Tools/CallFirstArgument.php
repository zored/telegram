<?php

declare(strict_types=1);

namespace Zored\Telegram\Tests\Tools;

use PHPUnit\Framework\Constraint\Callback;

final class CallFirstArgument extends Callback
{
    public function __construct()
    {
        parent::__construct([$this, 'callSelf']);
    }

    public function callSelf(callable $callable): bool
    {
        $callable();

        return true;
    }
}
