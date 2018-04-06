<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Messages;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputPeerInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\PeerSettingsInterface;

/**
 * @see https://core.telegram.org/method/messages.getPeerSettings
 * @codeCoverageIgnore
 */
class GetPeerSettings
{
    public const ID = 913498268;

    /** @var InputPeerInterface */
    private $peer;

    /** @var PeerSettingsInterface */
    private $result;

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

    /**
     * @return PeerSettingsInterface
     */
    public function getResult(): PeerSettingsInterface
    {
        return $this->result;
    }

    public function setResult(PeerSettingsInterface $result): self
    {
        $this->result = $result;

        return $this;
    }
}
