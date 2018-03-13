<?php

namespace Zored\Telegram\Util\Repeater;

final class Repeater implements RepeaterInterface
{
    /**
     * @var int
     */
    private $intervalSeconds;

    /**
     * @var int
     */
    private $maxTimeSeconds;

    /**
     * @param int $intervalSeconds
     */
    public function __construct(int $intervalSeconds, int $maxTimeSeconds)
    {
        $this->intervalSeconds = $intervalSeconds;
        $this->maxTimeSeconds = $maxTimeSeconds;
    }

    public function repeat(callable $callable): void
    {
        $time = 0;
        while(true) {
            if ($time >= $this->maxTimeSeconds) {
                return;
            }
            $callable();
            sleep($this->intervalSeconds);
            $time += $this->intervalSeconds;
        }
    }
}
