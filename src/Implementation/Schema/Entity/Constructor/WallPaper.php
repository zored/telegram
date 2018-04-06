<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\PhotoSizeInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\StringInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\WallPaperInterface;

/**
 * @see https://core.telegram.org/constructor/wallPaper
 * @codeCoverageIgnore
 */
final class WallPaper implements WallPaperInterface
{
    public const ID = -860866985;

    /** @var IntInterface */
    private $id;

    /** @var StringInterface */
    private $title;

    /** @var PhotoSizeInterface[] */
    private $sizes;

    /** @var IntInterface */
    private $color;

    /**
     * @return IntInterface
     */
    public function getId(): IntInterface
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = new class($id) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }

    /**
     * @return StringInterface
     */
    public function getTitle(): StringInterface
    {
        return $this->title;
    }

    public function setTitle(StringInterface $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return PhotoSizeInterface[]
     */
    public function getSizes(): array
    {
        return $this->sizes;
    }

    public function setSizes(array $sizes): self
    {
        $this->sizes = $sizes;

        return $this;
    }

    /**
     * @return IntInterface
     */
    public function getColor(): IntInterface
    {
        return $this->color;
    }

    public function setColor(int $color): self
    {
        $this->color = new class($color) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }
}
