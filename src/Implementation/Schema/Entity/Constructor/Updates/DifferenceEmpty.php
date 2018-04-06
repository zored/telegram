<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor\Updates;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Updates\DifferenceInterface;

/**
 * @see https://core.telegram.org/constructor/updates.differenceEmpty
 * @codeCoverageIgnore
 */
final class DifferenceEmpty implements DifferenceInterface
{
    public const ID = 1567990072;

    /** @var IntInterface */
    private $date;

    /** @var IntInterface */
    private $seq;

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
}
