<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Network\Transport;

use Zored\Telegram\Implementation\Network\Entity\DataCenter;

interface TransportInterface
{
    public function connect(DataCenter $dataCenter): void;

    public function send(string $message): void;

    public function receive(): string;
}
