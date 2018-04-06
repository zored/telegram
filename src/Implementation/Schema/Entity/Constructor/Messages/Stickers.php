<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor\Messages;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\DocumentInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Messages\StickersInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\StringInterface;

/**
 * @see https://core.telegram.org/constructor/messages.stickers
 * @codeCoverageIgnore
 */
final class Stickers implements StickersInterface
{
    public const ID = -1970352846;

    /** @var StringInterface */
    private $hash;

    /** @var DocumentInterface[] */
    private $stickers;

    /**
     * @return StringInterface
     */
    public function getHash(): StringInterface
    {
        return $this->hash;
    }

    public function setHash(string $hash): self
    {
        $this->hash = new class($hash) extends AbstractBaseType implements StringInterface {
        };

        return $this;
    }

    /**
     * @return DocumentInterface[]
     */
    public function getStickers(): array
    {
        return $this->stickers;
    }

    public function setStickers(array $stickers): self
    {
        $this->stickers = $stickers;

        return $this;
    }
}
