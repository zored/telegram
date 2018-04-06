<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Auth;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\BoolInterface;

/**
 * @see https://core.telegram.org/method/auth.logOut
 * @codeCoverageIgnore
 */
class LogOut
{
    public const ID = 1461180992;

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
