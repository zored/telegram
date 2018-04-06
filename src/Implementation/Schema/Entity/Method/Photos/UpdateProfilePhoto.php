<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Photos;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputPhotoCropInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputPhotoInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\UserProfilePhotoInterface;

/**
 * @see https://core.telegram.org/method/photos.updateProfilePhoto
 * @codeCoverageIgnore
 */
class UpdateProfilePhoto
{
    public const ID = -285902432;

    /** @var InputPhotoInterface */
    private $id;

    /** @var InputPhotoCropInterface */
    private $crop;

    /** @var UserProfilePhotoInterface */
    private $result;

    /**
     * @return InputPhotoInterface
     */
    public function getId(): InputPhotoInterface
    {
        return $this->id;
    }

    public function setId(InputPhotoInterface $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return InputPhotoCropInterface
     */
    public function getCrop(): InputPhotoCropInterface
    {
        return $this->crop;
    }

    public function setCrop(InputPhotoCropInterface $crop): self
    {
        $this->crop = $crop;

        return $this;
    }

    /**
     * @return UserProfilePhotoInterface
     */
    public function getResult(): UserProfilePhotoInterface
    {
        return $this->result;
    }

    public function setResult(UserProfilePhotoInterface $result): self
    {
        $this->result = $result;

        return $this;
    }
}
