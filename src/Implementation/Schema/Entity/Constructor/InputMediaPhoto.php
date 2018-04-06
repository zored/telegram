<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputMediaInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputPhotoInterface;

/**
 * @see https://core.telegram.org/constructor/inputMediaPhoto
 * @codeCoverageIgnore
 */
final class InputMediaPhoto implements InputMediaInterface
{
    public const ID = -1893027092;

    /** @var InputPhotoInterface */
    private $id;

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
}
