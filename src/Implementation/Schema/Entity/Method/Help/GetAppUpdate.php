<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Help;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
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

    public function setDeviceModel(string $device_model): self
    {
        $this->device_model = new class($device_model) extends AbstractBaseType implements StringInterface {
        };

        return $this;
    }

    /**
     * @return StringInterface
     */
    public function getSystemVersion(): StringInterface
    {
        return $this->system_version;
    }

    public function setSystemVersion(string $system_version): self
    {
        $this->system_version = new class($system_version) extends AbstractBaseType implements StringInterface {
        };

        return $this;
    }

    /**
     * @return StringInterface
     */
    public function getAppVersion(): StringInterface
    {
        return $this->app_version;
    }

    public function setAppVersion(string $app_version): self
    {
        $this->app_version = new class($app_version) extends AbstractBaseType implements StringInterface {
        };

        return $this;
    }

    /**
     * @return StringInterface
     */
    public function getLangCode(): StringInterface
    {
        return $this->lang_code;
    }

    public function setLangCode(string $lang_code): self
    {
        $this->lang_code = new class($lang_code) extends AbstractBaseType implements StringInterface {
        };

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
