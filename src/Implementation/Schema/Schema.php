<?php

namespace Zored\Telegram\Implementation\Schema;

use JMS\Serializer\Annotation as Serializer;
use Zored\Telegram\Implementation\Schema\Entity\Constructor;

final class Schema
{
    /**
     * @Serializer\Type("array<Zored\Telegram\Implementation\Schema\Entity\Constructor>")
     * @var Constructor[]
     */
    private $constructors;

    public function getConstructors(): array
    {
        return $this->constructors;
    }

    public function setConstructors(array $constructors): self
    {
        $this->constructors = $constructors;
        return $this;
    }
}
