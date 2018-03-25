<?php

declare(strict_types=1);

namespace Zored\Telegram\Entity\Control\Peer;

class Chat extends AbstractPeer
{
    /**
     * {@inheritdoc}
     */
    public function getType(): string
    {
        return 'chat';
    }
}
