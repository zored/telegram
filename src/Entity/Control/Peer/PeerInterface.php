<?php

declare(strict_types=1);

namespace Zored\Telegram\Entity\Control\Peer;

interface PeerInterface
{
    public function getId(): int;

    public function getType(): string;
}
