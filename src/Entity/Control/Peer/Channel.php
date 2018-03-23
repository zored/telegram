<?php

declare(strict_types=1);

namespace Zored\Telegram\Entity\Control\Peer;

final class Channel extends AbstractPeer
{
    /**
     * {@inheritdoc}
     */
    public function getType(): string
    {
        return 'channel';
    }
}
