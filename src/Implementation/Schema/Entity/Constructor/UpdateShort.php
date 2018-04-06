<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\UpdateInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\UpdatesInterface;

/**
 * @see https://core.telegram.org/constructor/updateShort
 * @codeCoverageIgnore
 */
final class UpdateShort implements UpdatesInterface
{
    public const ID = 2027216577;

    /** @var UpdateInterface */
    private $update;

    /** @var IntInterface */
    private $date;

    /**
     * @return UpdateInterface
     */
    public function getUpdate(): UpdateInterface
    {
        return $this->update;
    }

    public function setUpdate(UpdateInterface $update): self
    {
        $this->update = $update;

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
}
