<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Auth;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Auth\AuthorizationInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\StringInterface;

/**
 * @see https://core.telegram.org/method/auth.signUp
 * @codeCoverageIgnore
 */
class SignUp
{
    public const ID = 453408308;

    /** @var StringInterface */
    private $phone_number;

    /** @var StringInterface */
    private $phone_code_hash;

    /** @var StringInterface */
    private $phone_code;

    /** @var StringInterface */
    private $first_name;

    /** @var StringInterface */
    private $last_name;

    /** @var AuthorizationInterface */
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
     * @return StringInterface
     */
    public function getFirstName(): StringInterface
    {
        return $this->first_name;
    }

    public function setFirstName(StringInterface $first_name): self
    {
        $this->first_name = $first_name;

        return $this;
    }

    /**
     * @return StringInterface
     */
    public function getLastName(): StringInterface
    {
        return $this->last_name;
    }

    public function setLastName(StringInterface $last_name): self
    {
        $this->last_name = $last_name;

        return $this;
    }

    /**
     * @return AuthorizationInterface
     */
    public function getResult(): AuthorizationInterface
    {
        return $this->result;
    }

    public function setResult(AuthorizationInterface $result): self
    {
        $this->result = $result;

        return $this;
    }
}
