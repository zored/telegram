<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor\Messages;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Messages\SentMessageInterface;

/**
 * @see https://core.telegram.org/constructor/messages.sentMessage
 * @codeCoverageIgnore
 */
final class SentMessage implements SentMessageInterface
{
    public const ID = -772484260;

    /** @var IntInterface */
    private $id;

    /** @var IntInterface */
    private $date;

    /** @var IntInterface */
    private $pts;

    /** @var IntInterface */
    private $seq;

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
     * @return IntInterface
     */
    public function getPts(): IntInterface
    {
        return $this->pts;
    }

    public function setPts(int $pts): self
    {
        $this->pts = new class($pts) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }

    /**
     * @return IntInterface
     */
    public function getSeq(): IntInterface
    {
        return $this->seq;
    }

    public function setSeq(int $seq): self
    {
        $this->seq = new class($seq) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }
}
