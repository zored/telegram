<?php

declare(strict_types=1);

namespace Zored\Telegram\Util\Collection;

final class ConditionMatch
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
    public function find(callable $condition)
    {
        foreach ($this->collection as $item) {
            if ($condition($item)) {
                return $item;
            }
        }

        return null;
    }
}
