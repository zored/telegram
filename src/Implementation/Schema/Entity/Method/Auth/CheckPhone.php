<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Auth;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Auth\CheckedPhoneInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\StringInterface;

/**
 * @see https://core.telegram.org/method/auth.checkPhone
 * @codeCoverageIgnore
 */
class CheckPhone
{
    public const ID = 1877286395;

    /** @var StringInterface */
    private $phone_number;

    /** @var CheckedPhoneInterface */
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
     * @return CheckedPhoneInterface
     */
    public function getResult(): CheckedPhoneInterface
    {
        return $this->result;
    }

    public function setResult(CheckedPhoneInterface $result): self
    {
        $this->result = $result;

        return $this;
    }
}
