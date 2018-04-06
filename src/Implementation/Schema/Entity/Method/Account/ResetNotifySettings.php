<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Account;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\BoolInterface;

/**
 * @see https://core.telegram.org/method/account.resetNotifySettings
 * @codeCoverageIgnore
 */
class ResetNotifySettings
{
    public const ID = -612493497;

    /** @var BoolInterface */
    private $result;

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
