<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Auth;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Auth\AuthorizationInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\StringInterface;

/**
 * @see https://core.telegram.org/method/auth.signIn
 * @codeCoverageIgnore
 */
class SignIn
{
    public const ID = -1126886015;

    /** @var StringInterface */
    private $phone_number;

    /** @var StringInterface */
    private $phone_code_hash;

    /** @var StringInterface */
    private $phone_code;

    /** @var AuthorizationInterface */
    private $result;

    /**
     * @return StringInterface
     */
    public function getPhoneNumber(): StringInterface
    {
        return $this->phone_number;
    }

    public function setPhoneNumber(string $phone_number): self
    {
        $this->phone_number = new class($phone_number) extends AbstractBaseType implements StringInterface {
        };

        return $this;
    }

    /**
     * @return StringInterface
     */
    public function getPhoneCodeHash(): StringInterface
    {
        return $this->phone_code_hash;
    }

    public function setPhoneCodeHash(string $phone_code_hash): self
    {
        $this->phone_code_hash = new class($phone_code_hash) extends AbstractBaseType implements StringInterface {
        };

        return $this;
    }

    /**
     * @return StringInterface
     */
    public function getPhoneCode(): StringInterface
    {
        return $this->phone_code;
    }

    public function setPhoneCode(string $phone_code): self
    {
        $this->phone_code = new class($phone_code) extends AbstractBaseType implements StringInterface {
        };

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
