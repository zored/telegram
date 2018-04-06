<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\FileLocationInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\PhotoSizeInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\StringInterface;

/**
 * @see https://core.telegram.org/constructor/photoSize
 * @codeCoverageIgnore
 */
final class PhotoSize implements PhotoSizeInterface
{
    public const ID = 2009052699;

    /** @var StringInterface */
    private $type;

    /** @var FileLocationInterface */
    private $location;

    /** @var IntInterface */
    private $w;

    /** @var IntInterface */
    private $h;

    /** @var IntInterface */
    private $size;

    /**
     * @return StringInterface
     */
    public function getType(): StringInterface
    {
        return $this->type;
    }

    public function setType(StringInterface $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return FileLocationInterface
     */
    public function getLocation(): FileLocationInterface
    {
        return $this->location;
    }

    public function setLocation(FileLocationInterface $location): self
    {
        $this->location = $location;

        return $this;
    }

    /**
     * @return IntInterface
     */
    public function getW(): IntInterface
    {
        return $this->w;
    }

    public function setW(int $w): self
    {
        $this->w = new class($w) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }

    /**
     * @return IntInterface
     */
    public function getH(): IntInterface
    {
        return $this->h;
    }

    public function setH(int $h): self
    {
        $this->h = new class($h) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }

    /**
     * @return IntInterface
     */
    public function getSize(): IntInterface
    {
        return $this->size;
    }

    public function setSize(int $size): self
    {
        $this->size = new class($size) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }
}
