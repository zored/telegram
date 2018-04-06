<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor\Account;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Account\SentChangePhoneCodeInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\StringInterface;

/**
 * @see https://core.telegram.org/constructor/account.sentChangePhoneCode
 * @codeCoverageIgnore
 */
final class SentChangePhoneCode implements SentChangePhoneCodeInterface
{
    public const ID = -1527411636;

    /** @var StringInterface */
    private $phone_code_hash;

    /** @var IntInterface */
    private $send_call_timeout;

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
     * @return IntInterface
     */
    public function getSendCallTimeout(): IntInterface
    {
        return $this->send_call_timeout;
    }

    public function setSendCallTimeout(int $send_call_timeout): self
    {
        $this->send_call_timeout = new class($send_call_timeout) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }
}
