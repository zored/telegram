<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\BoolInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\StringInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\UserInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\UserProfilePhotoInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\UserStatusInterface;

/**
 * @see https://core.telegram.org/constructor/userSelf
 * @codeCoverageIgnore
 */
final class UserSelf implements UserInterface
{
    public const ID = 1879553105;

    /** @var IntInterface */
    private $id;

    /** @var StringInterface */
    private $first_name;

    /** @var StringInterface */
    private $last_name;

    /** @var StringInterface */
    private $username;

    /** @var StringInterface */
    private $phone;

    /** @var UserProfilePhotoInterface */
    private $photo;

    /** @var UserStatusInterface */
    private $status;

    /** @var BoolInterface */
    private $inactive;

    /**
     * @return IntInterface
     */
    public function getId(): IntInterface
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = new class($id) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }

    /**
     * @return StringInterface
     */
    public function getFirstName(): StringInterface
    {
        return $this->first_name;
    }

    public function setFirstName(string $first_name): self
    {
        $this->first_name = new class($first_name) extends AbstractBaseType implements StringInterface {
        };

        return $this;
    }

    /**
     * @return StringInterface
     */
    public function getLastName(): StringInterface
    {
        return $this->last_name;
    }

    public function setLastName(string $last_name): self
    {
        $this->last_name = new class($last_name) extends AbstractBaseType implements StringInterface {
        };

        return $this;
    }

    /**
     * @return StringInterface
     */
    public function getUsername(): StringInterface
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = new class($username) extends AbstractBaseType implements StringInterface {
        };

        return $this;
    }

    /**
     * @return StringInterface
     */
    public function getPhone(): StringInterface
    {
        return $this->phone;
    }

    public function setPhone(string $phone): self
    {
        $this->phone = new class($phone) extends AbstractBaseType implements StringInterface {
        };

        return $this;
    }

    /**
     * @return UserProfilePhotoInterface
     */
    public function getPhoto(): UserProfilePhotoInterface
    {
        return $this->photo;
    }

    public function setPhoto(UserProfilePhotoInterface $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * @return UserStatusInterface
     */
    public function getStatus(): UserStatusInterface
    {
        return $this->status;
    }

    public function setStatus(UserStatusInterface $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return BoolInterface
     */
    public function getInactive(): BoolInterface
    {
        return $this->inactive;
    }

    public function setInactive(BoolInterface $inactive): self
    {
        $this->inactive = $inactive;

        return $this;
    }
}
