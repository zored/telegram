<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Account;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\BoolInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;

/**
 * @see https://core.telegram.org/method/account.updateDeviceLocked
 * @codeCoverageIgnore
 */
class UpdateDeviceLocked
{
    public const ID = 954152242;

    /** @var IntInterface */
    private $period;

    /** @var BoolInterface */
    private $result;

    /**
     * @return IntInterface
     */
    public function getPeriod(): IntInterface
    {
        return $this->period;
    }

    public function setPeriod(int $period): self
    {
        $this->period = new class($period) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }

    /**
     * @return BoolInterface
     */
    public function getResult(): BoolInterface
    {
        return $this->result;
    }

    public function setResult(BoolInterface $result): self
    {
        $this->result = $result;

        return $this;
    }
}
