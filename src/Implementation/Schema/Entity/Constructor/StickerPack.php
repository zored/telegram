<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\LongInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\StickerPackInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\StringInterface;

/**
 * @see https://core.telegram.org/constructor/stickerPack
 * @codeCoverageIgnore
 */
final class StickerPack implements StickerPackInterface
{
    public const ID = 313694676;

    /** @var StringInterface */
    private $emoticon;

    /** @var LongInterface[] */
    private $documents;

    /**
     * @return StringInterface
     */
    public function getEmoticon(): StringInterface
    {
        return $this->emoticon;
    }

    public function setEmoticon(string $emoticon): self
    {
        $this->emoticon = new class($emoticon) extends AbstractBaseType implements StringInterface {
        };

        return $this;
    }

    /**
     * @return LongInterface[]
     */
    public function getDocuments(): array
    {
        return $this->documents;
    }

    public function setDocuments(array $documents): self
    {
        $this->documents = array_map(function (int $documents) {
            return new class($documents) extends AbstractBaseType implements LongInterface {
            };
        }, $documents);

        return $this;
    }
}
