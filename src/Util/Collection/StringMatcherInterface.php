<?php

namespace Zored\Telegram\Util\Collection;

interface StringMatcherInterface
{
    /**
     * @return object|null
     */
    public function matchFirst(string $substring, callable $getString);
}
