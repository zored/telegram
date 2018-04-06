<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Exception;

use Zored\Telegram\Implementation\Schema\Entity\EntityInterface;

final class EntitySaverException extends \RuntimeException
{
    public static function bacauseNoSaverForEntity(EntityInterface $entity): self
    {
        $class = get_class($entity);

        return new self("Entity $class has no saver.");
    }
}
