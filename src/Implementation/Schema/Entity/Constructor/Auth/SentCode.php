<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor\Auth;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Auth\SentCodeInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\BoolInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\StringInterface;

/**
 * @see https://core.telegram.org/constructor/auth.sentCode
 * @codeCoverageIgnore
 */
final class SentCode implements SentCodeInterface
{
    public const ID = -269659687;

    /** @var BoolInterface */
    private $phone_registered;

    /** @var StringInterface */
    private $phone_code_hash;

    /** @var IntInterface */
    private $send_call_timeout;

    /** @var BoolInterface */
    private $is_password;

    /**
     * @return BoolInterface
     */
    public function getPhoneRegistered(): BoolInterface
    {
        return $this->phone_registered;
    }

    public function setPhoneRegistered(BoolInterface $phone_registered): self
    {
        $this->phone_registered = $phone_registered;

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

    /**
     * @return BoolInterface
     */
    public function getIsPassword(): BoolInterface
    {
        return $this->is_password;
    }

    public function setIsPassword(BoolInterface $is_password): self
    {
        $this->is_password = $is_password;

        return $this;
    }
}
