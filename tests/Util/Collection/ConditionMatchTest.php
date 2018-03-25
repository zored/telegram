<?php

declare(strict_types=1);

namespace Zored\Telegram\Tests\Util\Collection;

use PHPUnit\Framework\TestCase;
use Zored\Telegram\Util\Collection\ConditionMatch;

class ConditionMatchTest extends TestCase
{
    public function testFind(): void
    {
        $this->assertSame('a', (new ConditionMatch(['a', 'b']))->find(function (string $value) {
            return 'a' === $value;
        }));
    }

    public function testFindNothing(): void
    {
        $this->assertNull((new ConditionMatch(['a', 'b']))->find(function (string $value) {
            return 'c' === $value;
        }));
    }
}
