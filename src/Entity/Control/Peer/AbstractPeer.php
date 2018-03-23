<?php

declare(strict_types=1);

namespace Zored\Telegram\Entity\Control\Peer;

abstract class AbstractPeer implements PeerInterface
{
    /**
     * @var int
     */
    private $id;

    public function __construct(int $id)
    {
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }
}
