<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Account;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\AccountDaysTTLInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\BoolInterface;

/**
 * @see https://core.telegram.org/method/account.setAccountTTL
 * @codeCoverageIgnore
 */
class SetAccountTTL
{
    public const ID = 608323678;

    /** @var AccountDaysTTLInterface */
    private $ttl;

    /** @var BoolInterface */
    private $result;

    /**
     * @return AccountDaysTTLInterface
     */
    public function getTtl(): AccountDaysTTLInterface
    {
        return $this->ttl;
    }

    public function setTtl(AccountDaysTTLInterface $ttl): self
    {
        $this->ttl = $ttl;

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
