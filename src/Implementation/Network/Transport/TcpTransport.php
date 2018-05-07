<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Network\Transport;

use Zored\Telegram\Implementation\Network\Entity\DataCenter;

final class TcpTransport implements TransportInterface
{
    /**
     * {@inheritdoc}
     */
    public function connect(DataCenter $dataCenter): void
    {
        $socket = socket_create(\AF_INET, \SOCK_STREAM, \SOL_TCP);
        socket_set_option($socket, \SOL_SOCKET, \SO_RCVTIMEO, ['sec' => 1, 'usec' => 0]);
        socket_set_option($socket, \SOL_SOCKET, \SO_SNDTIMEO, ['sec' => 1, 'usec' => 0]);
        socket_connect($socket, $dataCenter->getIp(), $dataCenter->getPort());
        socket_set_block($socket);

        // TODO: why?
        $this->send(chr(239));
    }

    /**
     * {@inheritdoc}
     */
    public function send(string $message): void
    {
    }

    /**
     * {@inheritdoc}
     */
    public function receive(): string
    {
    }
}
