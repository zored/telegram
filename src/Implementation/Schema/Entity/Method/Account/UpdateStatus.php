<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Account;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\BoolInterface;

/**
 * @see https://core.telegram.org/method/account.updateStatus
 * @codeCoverageIgnore
 */
class UpdateStatus
{
    public const ID = 1713919532;

    /** @var BoolInterface */
    private $offline;

    /** @var BoolInterface */
    private $result;

    /**
     * @return BoolInterface
     */
    public function getOffline(): BoolInterface
    {
        return $this->offline;
    }

    public function setOffline(BoolInterface $offline): self
    {
        $this->offline = $offline;

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
