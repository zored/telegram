<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\BoolInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\MessageMediaInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\StringInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\UpdateInterface;

/**
 * @see https://core.telegram.org/constructor/updateServiceNotification
 * @codeCoverageIgnore
 */
final class UpdateServiceNotification implements UpdateInterface
{
    public const ID = 942527460;

    /** @var StringInterface */
    private $type;

    /** @var StringInterface */
    private $message;

    /** @var MessageMediaInterface */
    private $media;

    /** @var BoolInterface */
    private $popup;

    /**
     * @return StringInterface
     */
    public function getType(): StringInterface
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = new class($type) extends AbstractBaseType implements StringInterface {
        };

        return $this;
    }

    /**
     * @return StringInterface
     */
    public function getMessage(): StringInterface
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = new class($message) extends AbstractBaseType implements StringInterface {
        };

        return $this;
    }

    /**
     * @return MessageMediaInterface
     */
    public function getMedia(): MessageMediaInterface
    {
        return $this->media;
    }

    public function setMedia(MessageMediaInterface $media): self
    {
        $this->media = $media;

        return $this;
    }

    /**
     * @return BoolInterface
     */
    public function getPopup(): BoolInterface
    {
        return $this->popup;
    }

    public function setPopup(BoolInterface $popup): self
    {
        $this->popup = $popup;

        return $this;
    }
}
