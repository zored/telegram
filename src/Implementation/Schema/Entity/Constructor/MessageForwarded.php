<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\MessageInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\MessageMediaInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\PeerInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\StringInterface;

/**
 * @see https://core.telegram.org/constructor/messageForwarded
 * @codeCoverageIgnore
 */
final class MessageForwarded implements MessageInterface
{
    public const ID = -1553471722;

    /** @var IntInterface */
    private $flags;

    /** @var IntInterface */
    private $id;

    /** @var IntInterface */
    private $fwd_from_id;

    /** @var IntInterface */
    private $fwd_date;

    /** @var IntInterface */
    private $from_id;

    /** @var PeerInterface */
    private $to_id;

    /** @var IntInterface */
    private $date;

    /** @var StringInterface */
    private $message;

    /** @var MessageMediaInterface */
    private $media;

    /**
     * @return IntInterface
     */
    public function getFlags(): IntInterface
    {
        return $this->flags;
    }

    public function setFlags(int $flags): self
    {
        $this->flags = new class($flags) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }

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
     * @return IntInterface
     */
    public function getFwdFromId(): IntInterface
    {
        return $this->fwd_from_id;
    }

    public function setFwdFromId(int $fwd_from_id): self
    {
        $this->fwd_from_id = new class($fwd_from_id) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }

    /**
     * @return IntInterface
     */
    public function getFwdDate(): IntInterface
    {
        return $this->fwd_date;
    }

    public function setFwdDate(int $fwd_date): self
    {
        $this->fwd_date = new class($fwd_date) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }

    /**
     * @return IntInterface
     */
    public function getFromId(): IntInterface
    {
        return $this->from_id;
    }

    public function setFromId(int $from_id): self
    {
        $this->from_id = new class($from_id) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }

    /**
     * @return PeerInterface
     */
    public function getToId(): PeerInterface
    {
        return $this->to_id;
    }

    public function setToId(PeerInterface $to_id): self
    {
        $this->to_id = $to_id;

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
     * @return StringInterface
     */
    public function getMessage(): StringInterface
    {
        return $this->message;
    }

    public function setMessage(StringInterface $message): self
    {
        $this->message = $message;

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
}
