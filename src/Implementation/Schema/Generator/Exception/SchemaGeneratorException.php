<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\Exception;

use Zored\Telegram\Implementation\Schema\Entity\EntityInterface;

final class SchemaGeneratorException extends \RuntimeException
{
    public static function becauseNoSaverFound(EntityInterface $type): self
    {
        $class = get_class($type);

        return new self("No saver found for type '$class'.");
    }
}
