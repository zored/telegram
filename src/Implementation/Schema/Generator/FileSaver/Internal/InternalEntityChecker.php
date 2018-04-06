<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Internal;

use Zored\Telegram\Implementation\Schema\Entity\EntityInterface;

final class InternalEntityChecker implements InternalEntityCheckerInterface
{
    private const NAMES_TO_SKIP = [
        /** @see \Zored\Telegram\Implementation\Schema\Entity\Parameter::getIsVector */
        'Vector t',
    ];

    public function isInternal(EntityInterface $entity): bool
    {
        return \in_array($entity->getName(), self::NAMES_TO_SKIP, true);
    }
}
