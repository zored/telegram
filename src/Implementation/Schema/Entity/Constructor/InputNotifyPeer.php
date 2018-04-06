<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputNotifyPeerInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputPeerInterface;

/**
 * @see https://core.telegram.org/constructor/inputNotifyPeer
 * @codeCoverageIgnore
 */
final class InputNotifyPeer implements InputNotifyPeerInterface
{
    public const ID = -1195615476;

    /** @var InputPeerInterface */
    private $peer;

    /**
     * @return InputPeerInterface
     */
    public function getPeer(): InputPeerInterface
    {
        return $this->peer;
    }

    public function setPeer(InputPeerInterface $peer): self
    {
        $this->peer = $peer;

        return $this;
    }
}
