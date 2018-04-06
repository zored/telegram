<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\ChatPhotoInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\FileLocationInterface;

/**
 * @see https://core.telegram.org/constructor/chatPhoto
 * @codeCoverageIgnore
 */
final class ChatPhoto implements ChatPhotoInterface
{
    public const ID = 1632839530;

    /** @var FileLocationInterface */
    private $photo_small;

    /** @var FileLocationInterface */
    private $photo_big;

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
