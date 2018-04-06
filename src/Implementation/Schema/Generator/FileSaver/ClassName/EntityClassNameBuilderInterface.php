<?php

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\ClassName;

use Zored\Telegram\Implementation\Schema\Entity\EntityInterface;

interface EntityClassNameBuilderInterface
{
    public function buildNamespace(EntityInterface $entity): string;
    public function buildName(EntityInterface $entity): string;
    public function buildShortName(EntityInterface $entity): string;
    public function buildPath(EntityInterface $entity): string;
}
