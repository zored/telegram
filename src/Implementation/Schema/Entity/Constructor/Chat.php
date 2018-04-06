<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\BoolInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\ChatInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\ChatPhotoInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\StringInterface;

/**
 * @see https://core.telegram.org/constructor/chat
 * @codeCoverageIgnore
 */
final class Chat implements ChatInterface
{
    public const ID = 1855757255;

    /** @var IntInterface */
    private $id;

    /** @var StringInterface */
    private $title;

    /** @var ChatPhotoInterface */
    private $photo;

    /** @var IntInterface */
    private $participants_count;

    /** @var IntInterface */
    private $date;

    /** @var BoolInterface */
    private $left;

    /** @var IntInterface */
    private $version;

    /**
     * @return IntInterface
     */
    public function getId(): IntInterface
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = new class($id) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }

    /**
     * @return StringInterface
     */
    public function getTitle(): StringInterface
    {
        return $this->title;
    }

    public function setTitle(StringInterface $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return ChatPhotoInterface
     */
    public function getPhoto(): ChatPhotoInterface
    {
        return $this->photo;
    }

    public function setPhoto(ChatPhotoInterface $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * @return IntInterface
     */
    public function getParticipantsCount(): IntInterface
    {
        return $this->participants_count;
    }

    public function setParticipantsCount(int $participants_count): self
    {
        $this->participants_count = new class($participants_count) extends AbstractBaseType implements IntInterface {
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
     * @return BoolInterface
     */
    public function getLeft(): BoolInterface
    {
        return $this->left;
    }

    public function setLeft(BoolInterface $left): self
    {
        $this->left = $left;

        return $this;
    }

    /**
     * @return IntInterface
     */
    public function getVersion(): IntInterface
    {
        return $this->version;
    }

    public function setVersion(int $version): self
    {
        $this->version = new class($version) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }
}
