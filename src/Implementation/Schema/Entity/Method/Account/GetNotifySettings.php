<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Account;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputNotifyPeerInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\PeerNotifySettingsInterface;

/**
 * @see https://core.telegram.org/method/account.getNotifySettings
 * @codeCoverageIgnore
 */
class GetNotifySettings
{
    public const ID = 313765169;

    /** @var InputNotifyPeerInterface */
    private $peer;

    /** @var PeerNotifySettingsInterface */
    private $result;

    /**
     * @return InputNotifyPeerInterface
     */
    public function getPeer(): InputNotifyPeerInterface
    {
        return $this->peer;
    }

    public function setPeer(InputNotifyPeerInterface $peer): self
    {
        $this->peer = $peer;

        return $this;
    }

    /**
     * @return PeerNotifySettingsInterface
     */
    public function getResult(): PeerNotifySettingsInterface
    {
        return $this->result;
    }

    public function setResult(PeerNotifySettingsInterface $result): self
    {
        $this->result = $result;

        return $this;
    }
}
