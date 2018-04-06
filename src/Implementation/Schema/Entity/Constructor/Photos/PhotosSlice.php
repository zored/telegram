<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor\Photos;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\PhotoInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Photos\PhotosInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\UserInterface;

/**
 * @see https://core.telegram.org/constructor/photos.photosSlice
 * @codeCoverageIgnore
 */
final class PhotosSlice implements PhotosInterface
{
    public const ID = 352657236;

    /** @var IntInterface */
    private $count;

    /** @var PhotoInterface[] */
    private $photos;

    /** @var UserInterface[] */
    private $users;

    /**
     * @return IntInterface
     */
    public function getCount(): IntInterface
    {
        return $this->count;
    }

    public function setCount(int $count): self
    {
        $this->count = new class($count) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }

    /**
     * @return PhotoInterface[]
     */
    public function getPhotos(): array
    {
        return $this->photos;
    }

    public function setPhotos(array $photos): self
    {
        $this->photos = $photos;

        return $this;
    }

    /**
     * @return UserInterface[]
     */
    public function getUsers(): array
    {
        return $this->users;
    }

    public function setUsers(array $users): self
    {
        $this->users = $users;

        return $this;
    }
}
