<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

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

    public function setFeature(StringInterface $feature): self
    {
        $this->feature = $feature;

        return $this;
    }

    /**
     * @return StringInterface
     */
    public function getDescription(): StringInterface
    {
        return $this->description;
    }

    public function setDescription(StringInterface $description): self
    {
        $this->description = $description;

        return $this;
    }
}
