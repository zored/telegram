<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Help;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Help\AppUpdateInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\StringInterface;

/**
 * @see https://core.telegram.org/method/help.getAppUpdate
 * @codeCoverageIgnore
 */
class GetAppUpdate
{
    public const ID = -938300290;

    /** @var StringInterface */
    private $device_model;

    /** @var StringInterface */
    private $system_version;

    /** @var StringInterface */
    private $app_version;

    /** @var StringInterface */
    private $lang_code;

    /** @var AppUpdateInterface */
    private $result;

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
     * @return AppUpdateInterface
     */
    public function getResult(): AppUpdateInterface
    {
        return $this->result;
    }

    public function setResult(AppUpdateInterface $result): self
    {
        $this->result = $result;

        return $this;
    }
}
