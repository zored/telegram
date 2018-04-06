<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Account;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\StringInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\UserInterface;

/**
 * @see https://core.telegram.org/method/account.changePhone
 * @codeCoverageIgnore
 */
class ChangePhone
{
    public const ID = 1891839707;

    /** @var StringInterface */
    private $phone_number;

    /** @var StringInterface */
    private $phone_code_hash;

    /** @var StringInterface */
    private $phone_code;

    /** @var UserInterface */
    private $result;

    /**
     * @return StringInterface
     */
    public function getPhoneNumber(): StringInterface
    {
        return $this->phone_number;
    }

    public function setPhoneNumber(StringInterface $phone_number): self
    {
        $this->phone_number = $phone_number;

        return $this;
    }

    /**
     * @return StringInterface
     */
    public function getPhoneCodeHash(): StringInterface
    {
        return $this->phone_code_hash;
    }

    public function setPhoneCodeHash(StringInterface $phone_code_hash): self
    {
        $this->phone_code_hash = $phone_code_hash;

        return $this;
    }

    /**
     * @return StringInterface
     */
    public function getPhoneCode(): StringInterface
    {
        return $this->phone_code;
    }

    public function setPhoneCode(StringInterface $phone_code): self
    {
        $this->phone_code = $phone_code;

        return $this;
    }

    /**
     * @return UserInterface
     */
    public function getResult(): UserInterface
    {
        return $this->result;
    }

    public function setResult(UserInterface $result): self
    {
        $this->result = $result;

        return $this;
    }
}
