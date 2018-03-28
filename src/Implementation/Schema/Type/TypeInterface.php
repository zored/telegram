<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Type;

interface TypeInterface
{
    public function __toString(): string;
}
