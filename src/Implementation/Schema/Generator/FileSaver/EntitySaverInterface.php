<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver;

use Zored\Telegram\Implementation\Schema\Entity\EntityInterface;

interface EntitySaverInterface
{
    public function save(EntityInterface $entity): void;
}
