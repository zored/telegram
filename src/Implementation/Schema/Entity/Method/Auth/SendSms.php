<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Auth;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\BoolInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\StringInterface;

/**
 * @see https://core.telegram.org/method/auth.sendSms
 * @codeCoverageIgnore
 */
class SendSms
{
    public const ID = 229241832;

    /** @var StringInterface */
    private $phone_number;

    /** @var StringInterface */
    private $phone_code_hash;

    /** @var BoolInterface */
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
