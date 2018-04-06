<?php

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Internal;

use Zored\Telegram\Implementation\Schema\Entity\EntityInterface;

interface InternalEntityCheckerInterface
{
    public function isInternal(EntityInterface $entity): bool;
}
