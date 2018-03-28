<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Type;

use Zored\Telegram\Implementation\Schema\Parameter;

final class ClassType extends AbstractClassType
{
    /** @var Parameter[] */
    private $parameters = [];

    public function addParameter(Parameter $parameter): self
    {
        $this->parameters[$parameter->getName()] = $parameter;

        return $this;
    }

    /**
     * @return Parameter[]
     */
    public function getParameters(): array
    {
        return $this->parameters;
    }
}
