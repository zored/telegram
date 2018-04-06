<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor\Photos;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\PhotoInterface as TypePhotoInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Photos\PhotoInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\UserInterface;

/**
 * @see https://core.telegram.org/constructor/photos.photo
 * @codeCoverageIgnore
 */
final class Photo implements PhotoInterface
{
    public const ID = 539045032;

    /** @var PhotoInterface */
    private $photo;

    /** @var UserInterface[] */
    private $users;

    /**
     * @return PhotoInterface
     */
    public function getPhoto(): TypePhotoInterface
    {
        return $this->photo;
    }

    public function setPhoto(TypePhotoInterface $photo): self
    {
        $this->photo = $photo;

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
