<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputChatPhotoInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputPhotoCropInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputPhotoInterface;

/**
 * @see https://core.telegram.org/constructor/inputChatPhoto
 * @codeCoverageIgnore
 */
final class InputChatPhoto implements InputChatPhotoInterface
{
    public const ID = -1293828344;

    /** @var InputPhotoInterface */
    private $id;

    /** @var InputPhotoCropInterface */
    private $crop;

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
}
