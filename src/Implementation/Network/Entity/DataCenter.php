<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Network\Entity;

final class DataCenter
{
    /**
     * @var string
     */
    private $ip;

    /**
     * @var int
     */
    private $port;

    public function __construct(string $ip, int $port)
    {
        $this->ip = $ip;
        $this->port = $port;
    }

    public static function createDefault(): self
    {
        return new DataCenter('149.154.167.51', 443);
    }

    public function getIp(): string
    {
        return $this->ip;
    }

    public function getPort(): int
    {
        return $this->port;
    }
}
