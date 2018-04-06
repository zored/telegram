<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Account;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\BoolInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\StringInterface;

/**
 * @see https://core.telegram.org/method/account.registerDevice
 * @codeCoverageIgnore
 */
class RegisterDevice
{
    public const ID = 1147957548;

    /** @var IntInterface */
    private $token_type;

    /** @var StringInterface */
    private $token;

    /** @var StringInterface */
    private $device_model;

    /** @var StringInterface */
    private $system_version;

    /** @var StringInterface */
    private $app_version;

    /** @var BoolInterface */
    private $app_sandbox;

    /** @var StringInterface */
    private $lang_code;

    /** @var BoolInterface */
    private $result;

    /**
     * @return IntInterface
     */
    public function getTokenType(): IntInterface
    {
        return $this->token_type;
    }

    public function setTokenType(int $token_type): self
    {
        $this->token_type = new class($token_type) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }

    /**
     * @return StringInterface
     */
    public function getToken(): StringInterface
    {
        return $this->token;
    }

    public function setToken(StringInterface $token): self
    {
        $this->token = $token;

        return $this;
    }

    /**
     * @return StringInterface
     */
    public function getDeviceModel(): StringInterface
    {
        return $this->device_model;
    }

    public function setDeviceModel(StringInterface $device_model): self
    {
        $this->device_model = $device_model;

        return $this;
    }

    /**
     * @return StringInterface
     */
    public function getSystemVersion(): StringInterface
    {
        return $this->system_version;
    }

    public function setSystemVersion(StringInterface $system_version): self
    {
        $this->system_version = $system_version;

        return $this;
    }

    /**
     * @return StringInterface
     */
    public function getAppVersion(): StringInterface
    {
        return $this->app_version;
    }

    public function setAppVersion(StringInterface $app_version): self
    {
        $this->app_version = $app_version;

        return $this;
    }

    /**
     * @return BoolInterface
     */
    public function getAppSandbox(): BoolInterface
    {
        return $this->app_sandbox;
    }

    public function setAppSandbox(BoolInterface $app_sandbox): self
    {
        $this->app_sandbox = $app_sandbox;

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
