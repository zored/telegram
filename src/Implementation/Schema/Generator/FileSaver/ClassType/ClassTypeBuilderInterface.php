<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\ClassType;

use Zored\Telegram\Implementation\Schema\Entity\EntityInterface;

interface ClassTypeBuilderInterface
{
    public const
        TYPE_CLASS = 'class';
    public const TYPE_INTERFACE = 'interface';

    public function build(EntityInterface $entity): string;
}
