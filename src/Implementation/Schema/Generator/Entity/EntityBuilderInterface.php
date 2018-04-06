<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\Entity;

use Zored\Telegram\Implementation\Schema\Entity\Constructor;
use Zored\Telegram\Implementation\Schema\Entity\EntityInterface;

interface EntityBuilderInterface
{
    /**
     * - Fill parameters and return types.
     * - Get interfaces for types.
     * - Set parents.
     *
     * @param Constructor[] $constructors
     * @return EntityInterface[]
     */
    public function build(array $constructors): array;
}
