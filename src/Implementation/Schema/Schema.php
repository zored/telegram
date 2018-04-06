<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema;

use JMS\Serializer\Annotation as Serializer;
use Zored\Telegram\Implementation\Schema\Entity\Constructor;
use Zored\Telegram\Implementation\Schema\Entity\Method;

final class Schema
{
    /**
     * @Serializer\Type("array<Zored\Telegram\Implementation\Schema\Entity\Constructor>")
     *
     * @var Constructor[]
     */
    private $constructors;

    /**
     * @Serializer\Type("array<Zored\Telegram\Implementation\Schema\Entity\Method>")
     *
     * @var Method[]
     */
    private $methods;

    /**
     * @return Constructor[]
     */
    public function getConstructors(): array
    {
        return $this->constructors;
    }

    public function setConstructors(array $constructors): self
    {
        $this->constructors = $constructors;

        return $this;
    }

    /**
     * @return Method[]
     */
    public function getMethods(): array
    {
        return $this->methods;
    }

    public function setMethods(array $methods): self
    {
        $this->methods = $methods;

        return $this;
    }
}
