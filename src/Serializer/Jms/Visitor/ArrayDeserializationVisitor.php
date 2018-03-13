<?php

namespace Zored\Telegram\Serializer\Jms\Visitor;

use JMS\Serializer\GenericDeserializationVisitor;

final class ArrayDeserializationVisitor extends GenericDeserializationVisitor
{
    /**
     * {@inheritdoc}
     */
    protected function decode($str): array
    {
        return $str;
    }
}
