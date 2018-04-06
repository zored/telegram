<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\GeoPointInterface;

/**
 * @see https://core.telegram.org/constructor/geoPointEmpty
 * @codeCoverageIgnore
 */
final class GeoPointEmpty implements GeoPointInterface
{
    public const ID = 286776671;
}
