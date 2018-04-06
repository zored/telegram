<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\DcOptionInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\StringInterface;

/**
 * @see https://core.telegram.org/constructor/dcOption
 * @codeCoverageIgnore
 */
final class DcOption implements DcOptionInterface
{
    public const ID = 784507964;

    /** @var IntInterface */
    private $id;

    /** @var StringInterface */
    private $hostname;

    /** @var StringInterface */
    private $ip_address;

    /** @var IntInterface */
    private $port;

    /**
     * @return IntInterface
     */
    public function getId(): IntInterface
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = new class($id) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }

    /**
     * @return StringInterface
     */
    public function getHostname(): StringInterface
    {
        return $this->hostname;
    }

    public function setHostname(StringInterface $hostname): self
    {
        $this->hostname = $hostname;

        return $this;
    }

    /**
     * @return StringInterface
     */
    public function getIpAddress(): StringInterface
    {
        return $this->ip_address;
    }

    public function setIpAddress(StringInterface $ip_address): self
    {
        $this->ip_address = $ip_address;

        return $this;
    }

    /**
     * @return IntInterface
     */
    public function getPort(): IntInterface
    {
        return $this->port;
    }

    public function setPort(int $port): self
    {
        $this->port = new class($port) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }
}
