<?php

declare(strict_types=1);

namespace Zored\Telegram\Serializer\Jms\Visitor;

use JMS\Serializer\GenericSerializationVisitor;

class ArraySerializationVisitor extends GenericSerializationVisitor
{
    public function getResult(): array
    {
        return $this->getRoot();
    }
}
