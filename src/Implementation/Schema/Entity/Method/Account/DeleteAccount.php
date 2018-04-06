<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Account;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\BoolInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\StringInterface;

/**
 * @see https://core.telegram.org/method/account.deleteAccount
 * @codeCoverageIgnore
 */
class DeleteAccount
{
    public const ID = 1099779595;

    /** @var StringInterface */
    private $reason;

    /** @var BoolInterface */
    private $result;

    /**
     * @return StringInterface
     */
    public function getReason(): StringInterface
    {
        return $this->reason;
    }

    public function setReason(StringInterface $reason): self
    {
        $this->reason = $reason;

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
