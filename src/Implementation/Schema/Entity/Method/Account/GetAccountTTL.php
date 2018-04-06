<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Account;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\AccountDaysTTLInterface;

/**
 * @see https://core.telegram.org/method/account.getAccountTTL
 * @codeCoverageIgnore
 */
class GetAccountTTL
{
    public const ID = 150761757;

    /** @var AccountDaysTTLInterface */
    private $result;

    /**
     * @return AccountDaysTTLInterface
     */
    public function getResult(): AccountDaysTTLInterface
    {
        return $this->result;
    }

    public function setResult(AccountDaysTTLInterface $result): self
    {
        $this->result = $result;

        return $this;
    }
}
