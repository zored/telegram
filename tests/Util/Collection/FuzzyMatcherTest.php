<?php

declare(strict_types=1);

namespace Zored\Telegram\Tests\Util\Collection;

use PHPUnit\Framework\TestCase;
use Zored\Telegram\Util\Collection\FuzzyMatcher;

final class FuzzyMatcherTest extends TestCase
{
    public function testMatch(): void
    {
        $matcher = new FuzzyMatcher([$foo = 'foo', $foobaz = 'foobaz']);
        $getter = function (string $value): string {
            return $value;
        };
        $this->assertSame($foo, $matcher->matchFirst('fo', $getter));
        $this->assertSame($foobaz, $matcher->matchFirst('baz', $getter));
        $this->assertSame($foobaz, $matcher->matchFirst('foobaz', $getter));
        $this->assertNull($matcher->matchFirst('foobazbar', $getter));
    }
}
