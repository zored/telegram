<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputGeoPointInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputMediaInterface;

/**
 * @see https://core.telegram.org/constructor/inputMediaGeoPoint
 * @codeCoverageIgnore
 */
final class InputMediaGeoPoint implements InputMediaInterface
{
    public const ID = -104578748;

    /** @var InputGeoPointInterface */
    private $geo_point;

    /**
     * @return InputGeoPointInterface
     */
    public function getGeoPoint(): InputGeoPointInterface
    {
        return $this->geo_point;
    }

    public function setGeoPoint(InputGeoPointInterface $geo_point): self
    {
        $this->geo_point = $geo_point;

        return $this;
    }
}
