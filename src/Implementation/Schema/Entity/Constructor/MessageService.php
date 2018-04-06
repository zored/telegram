<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\MessageActionInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\MessageInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\PeerInterface;

/**
 * @see https://core.telegram.org/constructor/messageService
 * @codeCoverageIgnore
 */
final class MessageService implements MessageInterface
{
    public const ID = 495384334;

    /** @var IntInterface */
    private $flags;

    /** @var IntInterface */
    private $id;

    /** @var IntInterface */
    private $from_id;

    /** @var PeerInterface */
    private $to_id;

    /** @var IntInterface */
    private $date;

    /** @var MessageActionInterface */
    private $action;

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
     * @return MessageActionInterface
     */
    public function getAction(): MessageActionInterface
    {
        return $this->action;
    }

    public function setAction(MessageActionInterface $action): self
    {
        $this->action = $action;

        return $this;
    }
}
