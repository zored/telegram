<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\FileLocationInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\LongInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\UserProfilePhotoInterface;

/**
 * @see https://core.telegram.org/constructor/userProfilePhoto
 * @codeCoverageIgnore
 */
final class UserProfilePhoto implements UserProfilePhotoInterface
{
    public const ID = -715532088;

    /** @var LongInterface */
    private $photo_id;

    /** @var FileLocationInterface */
    private $photo_small;

    /** @var FileLocationInterface */
    private $photo_big;

    /**
     * @return LongInterface
     */
    public function getPhotoId(): LongInterface
    {
        return $this->photo_id;
    }

    public function setPhotoId(int $photo_id): self
    {
        $this->photo_id = new class($photo_id) extends AbstractBaseType implements LongInterface {
        };

        return $this;
    }

    /**
     * @return FileLocationInterface
     */
    public function getPhotoSmall(): FileLocationInterface
    {
        return $this->photo_small;
    }

    public function setPhotoSmall(FileLocationInterface $photo_small): self
    {
        $this->photo_small = $photo_small;

        return $this;
    }

    /**
     * @return FileLocationInterface
     */
    public function getPhotoBig(): FileLocationInterface
    {
        return $this->photo_big;
    }

    public function setPhotoBig(FileLocationInterface $photo_big): self
    {
        $this->photo_big = $photo_big;

        return $this;
    }
}
