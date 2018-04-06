<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\DisabledFeatureInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\StringInterface;

/**
 * @see https://core.telegram.org/constructor/disabledFeature
 * @codeCoverageIgnore
 */
final class DisabledFeature implements DisabledFeatureInterface
{
    public const ID = -1369215196;

    /** @var StringInterface */
    private $feature;

    /** @var StringInterface */
    private $description;

    /**
     * @return StringInterface
     */
    public function getFeature(): StringInterface
    {
        return $this->feature;
    }

    public function setFeature(string $feature): self
    {
        $this->feature = new class($feature) extends AbstractBaseType implements StringInterface {
        };

        return $this;
    }

    /**
     * @return StringInterface
     */
    public function getDescription(): StringInterface
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = new class($description) extends AbstractBaseType implements StringInterface {
        };

        return $this;
    }
}
