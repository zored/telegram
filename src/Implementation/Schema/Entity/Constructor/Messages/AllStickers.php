<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor\Messages;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\DocumentInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Messages\AllStickersInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\StickerPackInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\StringInterface;

/**
 * @see https://core.telegram.org/constructor/messages.allStickers
 * @codeCoverageIgnore
 */
final class AllStickers implements AllStickersInterface
{
    public const ID = -588304126;

    /** @var StringInterface */
    private $hash;

    /** @var StickerPackInterface[] */
    private $packs;

    /** @var DocumentInterface[] */
    private $documents;

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
     * @return StickerPackInterface[]
     */
    public function getPacks(): array
    {
        return $this->packs;
    }

    public function setPacks(array $packs): self
    {
        $this->packs = $packs;

        return $this;
    }

    /**
     * @return DocumentInterface[]
     */
    public function getDocuments(): array
    {
        return $this->documents;
    }

    public function setDocuments(array $documents): self
    {
        $this->documents = $documents;

        return $this;
    }
}
