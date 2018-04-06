<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\BoolInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\UpdateInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\UserProfilePhotoInterface;

/**
 * @see https://core.telegram.org/constructor/updateUserPhoto
 * @codeCoverageIgnore
 */
final class UpdateUserPhoto implements UpdateInterface
{
    public const ID = -1791935732;

    /** @var IntInterface */
    private $user_id;

    /** @var IntInterface */
    private $date;

    /** @var UserProfilePhotoInterface */
    private $photo;

    /** @var BoolInterface */
    private $previous;

    /**
     * @return IntInterface
     */
    public function getUserId(): IntInterface
    {
        return $this->user_id;
    }

    public function setUserId(int $user_id): self
    {
        $this->user_id = new class($user_id) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }

    /**
     * @return IntInterface
     */
    public function getDate(): IntInterface
    {
        return $this->date;
    }

    public function setDate(int $date): self
    {
        $this->date = new class($date) extends AbstractBaseType implements IntInterface {
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
     * @return BoolInterface
     */
    public function getPrevious(): BoolInterface
    {
        return $this->previous;
    }

    public function setPrevious(BoolInterface $previous): self
    {
        $this->previous = $previous;

        return $this;
    }
}
