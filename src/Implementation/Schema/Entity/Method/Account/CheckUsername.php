<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Account;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\BoolInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\StringInterface;

/**
 * @see https://core.telegram.org/method/account.checkUsername
 * @codeCoverageIgnore
 */
class CheckUsername
{
    public const ID = 655677548;

    /** @var StringInterface */
    private $username;

    /** @var BoolInterface */
    private $result;

    /**
     * @return StringInterface
     */
    public function getUsername(): StringInterface
    {
        return $this->username;
    }

    public function setUsername(StringInterface $username): self
    {
        $this->username = $username;

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
