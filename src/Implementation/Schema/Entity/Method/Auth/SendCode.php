<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Auth;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Auth\SentCodeInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\StringInterface;

/**
 * @see https://core.telegram.org/method/auth.sendCode
 * @codeCoverageIgnore
 */
class SendCode
{
    public const ID = 1988976461;

    /** @var StringInterface */
    private $phone_number;

    /** @var IntInterface */
    private $sms_type;

    /** @var IntInterface */
    private $api_id;

    /** @var StringInterface */
    private $api_hash;

    /** @var StringInterface */
    private $lang_code;

    /** @var SentCodeInterface */
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
     * @return IntInterface
     */
    public function getSmsType(): IntInterface
    {
        return $this->sms_type;
    }

    public function setSmsType(int $sms_type): self
    {
        $this->sms_type = new class($sms_type) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }

    /**
     * @return IntInterface
     */
    public function getApiId(): IntInterface
    {
        return $this->api_id;
    }

    public function setApiId(int $api_id): self
    {
        $this->api_id = new class($api_id) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }

    /**
     * @return StringInterface
     */
    public function getApiHash(): StringInterface
    {
        return $this->api_hash;
    }

    public function setApiHash(StringInterface $api_hash): self
    {
        $this->api_hash = $api_hash;

        return $this;
    }

    /**
     * @return StringInterface
     */
    public function getLangCode(): StringInterface
    {
        return $this->lang_code;
    }

    public function setLangCode(StringInterface $lang_code): self
    {
        $this->lang_code = $lang_code;

        return $this;
    }

    /**
     * @return SentCodeInterface
     */
    public function getResult(): SentCodeInterface
    {
        return $this->result;
    }

    public function setResult(SentCodeInterface $result): self
    {
        $this->result = $result;

        return $this;
    }
}
