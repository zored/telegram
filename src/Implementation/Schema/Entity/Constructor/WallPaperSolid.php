<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\StringInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\WallPaperInterface;

/**
 * @see https://core.telegram.org/constructor/wallPaperSolid
 * @codeCoverageIgnore
 */
final class WallPaperSolid implements WallPaperInterface
{
    public const ID = 1662091044;

    /** @var IntInterface */
    private $id;

    /** @var StringInterface */
    private $title;

    /** @var IntInterface */
    private $bg_color;

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
     * @return IntInterface
     */
    public function getBgColor(): IntInterface
    {
        return $this->bg_color;
    }

    public function setBgColor(int $bg_color): self
    {
        $this->bg_color = new class($bg_color) extends AbstractBaseType implements IntInterface {
        };

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
