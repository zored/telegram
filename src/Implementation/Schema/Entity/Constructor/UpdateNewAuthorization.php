<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\LongInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\StringInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\UpdateInterface;

/**
 * @see https://core.telegram.org/constructor/updateNewAuthorization
 * @codeCoverageIgnore
 */
final class UpdateNewAuthorization implements UpdateInterface
{
    public const ID = -1895411046;

    /** @var LongInterface */
    private $auth_key_id;

    /** @var IntInterface */
    private $date;

    /** @var StringInterface */
    private $device;

    /** @var StringInterface */
    private $location;

    /**
     * @return LongInterface
     */
    public function getAuthKeyId(): LongInterface
    {
        return $this->auth_key_id;
    }

    public function setAuthKeyId(int $auth_key_id): self
    {
        $this->auth_key_id = new class($auth_key_id) extends AbstractBaseType implements LongInterface {
        };

        return $this;
    }

    /**
     * @return IntInterface
     */
    public function getDate(): IntInterface
    {
        return $this->date;
    }

    public function setDate(int $date): self
    {
        $this->date = new class($date) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }

    /**
     * @return StringInterface
     */
    public function getDevice(): StringInterface
    {
        return $this->device;
    }

    public function setDevice(string $device): self
    {
        $this->device = new class($device) extends AbstractBaseType implements StringInterface {
        };

        return $this;
    }

    /**
     * @return StringInterface
     */
    public function getLocation(): StringInterface
    {
        return $this->location;
    }

    public function setLocation(string $location): self
    {
        $this->location = new class($location) extends AbstractBaseType implements StringInterface {
        };

        return $this;
    }
}
