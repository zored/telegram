<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Account;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Account\SentChangePhoneCodeInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\StringInterface;

/**
 * @see https://core.telegram.org/method/account.sendChangePhoneCode
 * @codeCoverageIgnore
 */
class SendChangePhoneCode
{
    public const ID = -1543001868;

    /** @var StringInterface */
    private $phone_number;

    /** @var SentChangePhoneCodeInterface */
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
     * @return SentChangePhoneCodeInterface
     */
    public function getResult(): SentChangePhoneCodeInterface
    {
        return $this->result;
    }

    public function setResult(SentChangePhoneCodeInterface $result): self
    {
        $this->result = $result;

        return $this;
    }
}
