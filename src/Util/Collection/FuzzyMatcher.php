<?php

declare(strict_types=1);

namespace Zored\Telegram\Util\Collection;

class FuzzyMatcher implements StringMatcherInterface
{
    /**
     * @var iterable
     */
    private $collection;

    public function __construct(iterable $collection)
    {
        $this->collection = $collection;
    }

    /**
     * @return object|null
     */
    public function matchFirst(string $substring, callable $getString)
    {
        $substring = mb_strtolower($substring);
        foreach ($this->collection as $item) {
            $currentValue = mb_strtolower($getString($item));

            if (false !== mb_strpos($currentValue, $substring)) {
                return $item;
            }
        }

        return null;
    }
}
