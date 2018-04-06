<?php

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\ClassType;

use Zored\Telegram\Implementation\Schema\Entity\EntityInterface;
use Zored\Telegram\Implementation\Schema\Entity\Type;

final class ClassTypeBuilder implements ClassTypeBuilderInterface
{
    public function build(EntityInterface $entity): string
    {
        return $entity instanceof Type ? self::TYPE_INTERFACE : self::TYPE_CLASS;
    }
}
