<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\AccountDaysTTLInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;

/**
 * @see https://core.telegram.org/constructor/accountDaysTTL
 * @codeCoverageIgnore
 */
final class AccountDaysTTL implements AccountDaysTTLInterface
{
    public const ID = -1194283041;

    /** @var IntInterface */
    private $days;

    /**
     * @return IntInterface
     */
    public function getDays(): IntInterface
    {
        return $this->days;
    }

    public function setDays(int $days): self
    {
        $this->days = new class($days) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }
}
