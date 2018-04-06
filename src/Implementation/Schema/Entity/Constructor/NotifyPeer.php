<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\NotifyPeerInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\PeerInterface;

/**
 * @see https://core.telegram.org/constructor/notifyPeer
 * @codeCoverageIgnore
 */
final class NotifyPeer implements NotifyPeerInterface
{
    public const ID = -1613493288;

    /** @var PeerInterface */
    private $peer;

    /**
     * @return PeerInterface
     */
    public function getPeer(): PeerInterface
    {
        return $this->peer;
    }

    public function setPeer(PeerInterface $peer): self
    {
        $this->peer = $peer;

        return $this;
    }
}
