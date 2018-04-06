<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor\Messages;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\BytesInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Messages\DhConfigInterface;

/**
 * @see https://core.telegram.org/constructor/messages.dhConfigNotModified
 * @codeCoverageIgnore
 */
final class DhConfigNotModified implements DhConfigInterface
{
    public const ID = -1058912715;

    /** @var BytesInterface */
    private $random;

    /**
     * @return BytesInterface
     */
    public function getRandom(): BytesInterface
    {
        return $this->random;
    }

    public function setRandom(BytesInterface $random): self
    {
        $this->random = $random;

        return $this;
    }
}
