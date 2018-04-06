<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\GeoPointInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\MessageMediaInterface;

/**
 * @see https://core.telegram.org/constructor/messageMediaGeo
 * @codeCoverageIgnore
 */
final class MessageMediaGeo implements MessageMediaInterface
{
    public const ID = 1457575028;

    /** @var GeoPointInterface */
    private $geo;

    /**
     * @return GeoPointInterface
     */
    public function getGeo(): GeoPointInterface
    {
        return $this->geo;
    }

    public function setGeo(GeoPointInterface $geo): self
    {
        $this->geo = $geo;

        return $this;
    }
}
