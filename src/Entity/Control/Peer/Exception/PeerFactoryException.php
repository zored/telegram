<?php

declare(strict_types=1);

namespace Zored\Telegram\Entity\Control\Peer\Exception;

use RuntimeException;
use Zored\Telegram\Entity\General\AbstractEntity;

class PeerFactoryException extends RuntimeException
{
    public static function becauseNoPeerFound(AbstractEntity $entity): self
    {
        $class = get_class($entity);

        return new self("No peer found for '$class'.");
    }
}
