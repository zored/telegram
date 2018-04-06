<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\BoolInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Contacts\LinkInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\PeerNotifySettingsInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\PhotoInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\StringInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\UserFullInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\UserInterface;

/**
 * @see https://core.telegram.org/constructor/userFull
 * @codeCoverageIgnore
 */
final class UserFull implements UserFullInterface
{
    public const ID = 1997575642;

    /** @var UserInterface */
    private $user;

    /** @var LinkInterface */
    private $link;

    /** @var PhotoInterface */
    private $profile_photo;

    /** @var PeerNotifySettingsInterface */
    private $notify_settings;

    /** @var BoolInterface */
    private $blocked;

    /** @var StringInterface */
    private $real_first_name;

    /** @var StringInterface */
    private $real_last_name;

    /**
     * @return UserInterface
     */
    public function getUser(): UserInterface
    {
        return $this->user;
    }

    public function setUser(UserInterface $user): self
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return LinkInterface
     */
    public function getLink(): LinkInterface
    {
        return $this->link;
    }

    public function setLink(LinkInterface $link): self
    {
        $this->link = $link;

        return $this;
    }

    /**
     * @return PhotoInterface
     */
    public function getProfilePhoto(): PhotoInterface
    {
        return $this->profile_photo;
    }

    public function setProfilePhoto(PhotoInterface $profile_photo): self
    {
        $this->profile_photo = $profile_photo;

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

    /**
     * @return BoolInterface
     */
    public function getBlocked(): BoolInterface
    {
        return $this->blocked;
    }

    public function setBlocked(BoolInterface $blocked): self
    {
        $this->blocked = $blocked;

        return $this;
    }

    /**
     * @return StringInterface
     */
    public function getRealFirstName(): StringInterface
    {
        return $this->real_first_name;
    }

    public function setRealFirstName(string $real_first_name): self
    {
        $this->real_first_name = new class($real_first_name) extends AbstractBaseType implements StringInterface {
        };

        return $this;
    }

    /**
     * @return StringInterface
     */
    public function getRealLastName(): StringInterface
    {
        return $this->real_last_name;
    }

    public function setRealLastName(string $real_last_name): self
    {
        $this->real_last_name = new class($real_last_name) extends AbstractBaseType implements StringInterface {
        };

        return $this;
    }
}
