<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\DoubleInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\GeoPointInterface;

/**
 * @see https://core.telegram.org/constructor/geoPoint
 * @codeCoverageIgnore
 */
final class GeoPoint implements GeoPointInterface
{
    public const ID = 541710092;

    /** @var DoubleInterface */
    private $long;

    /** @var DoubleInterface */
    private $lat;

    /**
     * @return DoubleInterface
     */
    public function getLong(): DoubleInterface
    {
        return $this->long;
    }

    public function setLong(float $long): self
    {
        $this->long = new class($long) extends AbstractBaseType implements DoubleInterface {
        };

        return $this;
    }

    /**
     * @return DoubleInterface
     */
    public function getLat(): DoubleInterface
    {
        return $this->lat;
    }

    public function setLat(float $lat): self
    {
        $this->lat = new class($lat) extends AbstractBaseType implements DoubleInterface {
        };

        return $this;
    }
}
