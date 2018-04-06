<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\NearestDcInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\StringInterface;

/**
 * @see https://core.telegram.org/constructor/nearestDc
 * @codeCoverageIgnore
 */
final class NearestDc implements NearestDcInterface
{
    public const ID = -1910892683;

    /** @var StringInterface */
    private $country;

    /** @var IntInterface */
    private $this_dc;

    /** @var IntInterface */
    private $nearest_dc;

    /**
     * @return StringInterface
     */
    public function getCountry(): StringInterface
    {
        return $this->country;
    }

    public function setCountry(string $country): self
    {
        $this->country = new class($country) extends AbstractBaseType implements StringInterface {
        };

        return $this;
    }

    /**
     * @return IntInterface
     */
    public function getThisDc(): IntInterface
    {
        return $this->this_dc;
    }

    public function setThisDc(int $this_dc): self
    {
        $this->this_dc = new class($this_dc) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }

    /**
     * @return IntInterface
     */
    public function getNearestDc(): IntInterface
    {
        return $this->nearest_dc;
    }

    public function setNearestDc(int $nearest_dc): self
    {
        $this->nearest_dc = new class($nearest_dc) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }
}
