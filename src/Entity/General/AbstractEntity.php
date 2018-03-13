<?php

namespace Zored\Telegram\Entity\General;
use JMS\Serializer\Annotation as Serializer;

/** @Serializer\AccessType("public_method") */
abstract class AbstractEntity
{
    /**
     * "_"
     * @var string
     */
    public $entityType;

    public function getEntityType(): string
    {
        return $this->entityType;
    }
}
