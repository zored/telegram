<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\StringInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Unknown1Interface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Unknown2Interface;

/**
 * @see https://core.telegram.org/method/initConnection
 * @codeCoverageIgnore
 */
class InitConnection
{
    public const ID = 1769565673;

    /** @var IntInterface */
    private $api_id;

    /** @var StringInterface */
    private $device_model;

    /** @var StringInterface */
    private $system_version;

    /** @var StringInterface */
    private $app_version;

    /** @var StringInterface */
    private $lang_code;

    /** @var Unknown1Interface */
    private $query;

    /** @var Unknown2Interface */
    private $result;

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
     * @return Unknown1Interface
     */
    public function getQuery(): Unknown1Interface
    {
        return $this->query;
    }

    public function setQuery(Unknown1Interface $query): self
    {
        $this->query = $query;

        return $this;
    }

    /**
     * @return Unknown2Interface
     */
    public function getResult(): Unknown2Interface
    {
        return $this->result;
    }

    public function setResult(Unknown2Interface $result): self
    {
        $this->result = $result;

        return $this;
    }
}
