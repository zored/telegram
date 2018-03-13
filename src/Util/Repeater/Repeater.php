<?php

namespace Zored\Telegram\Util\Repeater;

final class Repeater implements RepeaterInterface
{
    private const NANO_IN_MILLISECOND = 1000;

    /**
     * @var int
     */
    private $intervalMilliseconds;

    /**
     * @var int
     */
    private $maxTimeMilliseconds;

    /**
     * @param int $intervalMilliseconds
     */
    public function __construct(int $intervalMilliseconds, int $maxTimeMilliseconds)
    {
        $this->intervalMilliseconds = $intervalMilliseconds;
        $this->maxTimeMilliseconds = $maxTimeMilliseconds;
    }

    public function repeat(callable $callable): void
    {
        $time = 0;
        while (true) {
            if ($time >= $this->maxTimeMilliseconds) {
                break;
            }
            $callable();
            usleep($this->intervalMilliseconds * self::NANO_IN_MILLISECOND);
            $time += $this->intervalMilliseconds;
        }
    }
}
