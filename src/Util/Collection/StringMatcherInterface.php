<?php

declare(strict_types=1);

namespace Zored\Telegram\Util\Collection;

interface StringMatcherInterface
{
    /**
     * @return object|null
     */
    public function matchFirst(string $substring, callable $getString);
}
