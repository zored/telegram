<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Updates;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Updates\DifferenceInterface;

/**
 * @see https://core.telegram.org/method/updates.getDifference
 * @codeCoverageIgnore
 */
class GetDifference
{
    public const ID = 168039573;

    /** @var IntInterface */
    private $pts;

    /** @var IntInterface */
    private $date;

    /** @var IntInterface */
    private $qts;

    /** @var DifferenceInterface */
    private $result;

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
     * @return DifferenceInterface
     */
    public function getResult(): DifferenceInterface
    {
        return $this->result;
    }

    public function setResult(DifferenceInterface $result): self
    {
        $this->result = $result;

        return $this;
    }
}
