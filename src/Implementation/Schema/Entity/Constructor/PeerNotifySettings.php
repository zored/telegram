<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\BoolInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\PeerNotifySettingsInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\StringInterface;

/**
 * @see https://core.telegram.org/constructor/peerNotifySettings
 * @codeCoverageIgnore
 */
final class PeerNotifySettings implements PeerNotifySettingsInterface
{
    public const ID = -1923214866;

    /** @var IntInterface */
    private $mute_until;

    /** @var StringInterface */
    private $sound;

    /** @var BoolInterface */
    private $show_previews;

    /** @var IntInterface */
    private $events_mask;

    /**
     * @return IntInterface
     */
    public function getMuteUntil(): IntInterface
    {
        return $this->mute_until;
    }

    public function setMuteUntil(int $mute_until): self
    {
        $this->mute_until = new class($mute_until) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }

    /**
     * @return StringInterface
     */
    public function getSound(): StringInterface
    {
        return $this->sound;
    }

    public function setSound(StringInterface $sound): self
    {
        $this->sound = $sound;

        return $this;
    }

    /**
     * @return BoolInterface
     */
    public function getShowPreviews(): BoolInterface
    {
        return $this->show_previews;
    }

    public function setShowPreviews(BoolInterface $show_previews): self
    {
        $this->show_previews = $show_previews;

        return $this;
    }

    /**
     * @return IntInterface
     */
    public function getEventsMask(): IntInterface
    {
        return $this->events_mask;
    }

    public function setEventsMask(int $events_mask): self
    {
        $this->events_mask = new class($events_mask) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }
}
