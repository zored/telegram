<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor\Updates;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Updates\StateInterface;

/**
 * @see https://core.telegram.org/constructor/updates.state
 * @codeCoverageIgnore
 */
final class State implements StateInterface
{
    public const ID = -1519637954;

    /** @var IntInterface */
    private $pts;

    /** @var IntInterface */
    private $qts;

    /** @var IntInterface */
    private $date;

    /** @var IntInterface */
    private $seq;

    /** @var IntInterface */
    private $unread_count;

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
    public function getQts(): IntInterface
    {
        return $this->qts;
    }

    public function setQts(int $qts): self
    {
        $this->qts = new class($qts) extends AbstractBaseType implements IntInterface {
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

    /**
     * @return IntInterface
     */
    public function getUnreadCount(): IntInterface
    {
        return $this->unread_count;
    }

    public function setUnreadCount(int $unread_count): self
    {
        $this->unread_count = new class($unread_count) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }
}
