<?php

namespace Zored\Telegram\Tests\Util\Repeater;

use PHPUnit\Framework\TestCase;
use Zored\Telegram\Util\Repeater\Repeater;

final class RepeaterTest extends TestCase
{
    public function testRepeat()
    {
        $called = false;
        (new Repeater(1, 1))->repeat(function () use (&$called) {
            $called = true;
        });
        $this->assertTrue($called);
    }
}
