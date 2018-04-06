<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\DialogInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\PeerInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\PeerNotifySettingsInterface;

/**
 * @see https://core.telegram.org/constructor/dialog
 * @codeCoverageIgnore
 */
final class Dialog implements DialogInterface
{
    public const ID = -1422222932;

    /** @var PeerInterface */
    private $peer;

    /** @var IntInterface */
    private $top_message;

    /** @var IntInterface */
    private $unread_count;

    /** @var PeerNotifySettingsInterface */
    private $notify_settings;

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

    /**
     * @return IntInterface
     */
    public function getTopMessage(): IntInterface
    {
        return $this->top_message;
    }

    public function setTopMessage(int $top_message): self
    {
        $this->top_message = new class($top_message) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }

    /**
     * @return IntInterface
     */
    public function getUnreadCount(): IntInterface
    {
        return $this->unread_count;
    }

    public function setUnreadCount(int $unread_count): self
    {
        $this->unread_count = new class($unread_count) extends AbstractBaseType implements IntInterface {
        };

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
