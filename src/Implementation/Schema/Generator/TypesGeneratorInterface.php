<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator;

interface TypesGeneratorInterface
{
    public function generate(array $constructors): void;
}
