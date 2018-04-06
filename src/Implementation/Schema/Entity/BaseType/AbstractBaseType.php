<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Entity\BaseType;

abstract class AbstractBaseType
{
    private $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }
}
