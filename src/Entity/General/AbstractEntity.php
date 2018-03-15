<?php

declare(strict_types=1);

namespace Zored\Telegram\Entity\General;

use JMS\Serializer\Annotation as Serializer;

/** @Serializer\AccessType("public_method") */
abstract class AbstractEntity
{
    /**
     * @Serializer\SerializedName("_")
     * @Serializer\Type("string")
     * "_"
     *
     * @var string
     */
    public $entityType;

    public function getEntityType(): string
    {
        return $this->entityType;
    }

    public function setEntityType(string $entityType): self
    {
        $this->entityType = $entityType;

        return $this;
    }
}
