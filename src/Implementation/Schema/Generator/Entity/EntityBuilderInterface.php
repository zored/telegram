<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\Entity;

use Zored\Telegram\Implementation\Schema\Entity\EntityInterface;
use Zored\Telegram\Implementation\Schema\Schema;

interface EntityBuilderInterface
{
    /**
     * - Fill parameters and return types.
     * - Get interfaces for types.
     * - Set parents.
     *
     * @return EntityInterface[]
     */
    public function build(Schema $schema): array;
}
