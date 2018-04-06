<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\MessageActionInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\PhotoInterface;

/**
 * @see https://core.telegram.org/constructor/messageActionChatEditPhoto
 * @codeCoverageIgnore
 */
final class MessageActionChatEditPhoto implements MessageActionInterface
{
    public const ID = 2144015272;

    /** @var PhotoInterface */
    private $photo;

    /**
     * @return PhotoInterface
     */
    public function getPhoto(): PhotoInterface
    {
        return $this->photo;
    }

    public function setPhoto(PhotoInterface $photo): self
    {
        $this->photo = $photo;

        return $this;
    }
}
