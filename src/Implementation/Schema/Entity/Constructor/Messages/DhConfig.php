<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor\Messages;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\BytesInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Messages\DhConfigInterface;

/**
 * @see https://core.telegram.org/constructor/messages.dhConfig
 * @codeCoverageIgnore
 */
final class DhConfig implements DhConfigInterface
{
    public const ID = 740433629;

    /** @var IntInterface */
    private $g;

    /** @var BytesInterface */
    private $p;

    /** @var IntInterface */
    private $version;

    /** @var BytesInterface */
    private $random;

    /**
     * @return IntInterface
     */
    public function getG(): IntInterface
    {
        return $this->g;
    }

    public function setG(int $g): self
    {
        $this->g = new class($g) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }

    /**
     * @return BytesInterface
     */
    public function getP(): BytesInterface
    {
        return $this->p;
    }

    public function setP(BytesInterface $p): self
    {
        $this->p = $p;

        return $this;
    }

    /**
     * @return IntInterface
     */
    public function getVersion(): IntInterface
    {
        return $this->version;
    }

    public function setVersion(int $version): self
    {
        $this->version = new class($version) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }

    /**
     * @return BytesInterface
     */
    public function getRandom(): BytesInterface
    {
        return $this->random;
    }

    public function setRandom(BytesInterface $random): self
    {
        $this->random = $random;

        return $this;
    }
}
