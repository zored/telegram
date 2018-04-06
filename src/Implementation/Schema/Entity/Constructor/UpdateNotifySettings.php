<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\NotifyPeerInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\PeerNotifySettingsInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\UpdateInterface;

/**
 * @see https://core.telegram.org/constructor/updateNotifySettings
 * @codeCoverageIgnore
 */
final class UpdateNotifySettings implements UpdateInterface
{
    public const ID = -1094555409;

    /** @var NotifyPeerInterface */
    private $peer;

    /** @var PeerNotifySettingsInterface */
    private $notify_settings;

    /**
     * @return NotifyPeerInterface
     */
    public function getPeer(): NotifyPeerInterface
    {
        return $this->peer;
    }

    public function setPeer(NotifyPeerInterface $peer): self
    {
        $this->peer = $peer;

        return $this;
    }

    /**
     * @return PeerNotifySettingsInterface
     */
    public function getNotifySettings(): PeerNotifySettingsInterface
    {
        return $this->notify_settings;
    }

    public function setNotifySettings(PeerNotifySettingsInterface $notify_settings): self
    {
        $this->notify_settings = $notify_settings;

        return $this;
    }
}
