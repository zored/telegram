<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\ClassName;

use Zored\Telegram\Implementation\Schema\Entity\EntityInterface;

interface EntityClassNameBuilderInterface
{
    public const CLASS_GLUE = '\\';

    public function buildName(EntityInterface $entity): ClassName;

    public function buildPath(EntityInterface $entity): string;
}
