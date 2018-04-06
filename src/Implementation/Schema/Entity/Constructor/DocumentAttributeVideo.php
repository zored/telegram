<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\DocumentAttributeInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;

/**
 * @see https://core.telegram.org/constructor/documentAttributeVideo
 * @codeCoverageIgnore
 */
final class DocumentAttributeVideo implements DocumentAttributeInterface
{
    public const ID = 1494273227;

    /** @var IntInterface */
    private $duration;

    /** @var IntInterface */
    private $w;

    /** @var IntInterface */
    private $h;

    /**
     * @return IntInterface
     */
    public function getDuration(): IntInterface
    {
        return $this->duration;
    }

    public function setDuration(int $duration): self
    {
        $this->duration = new class($duration) extends AbstractBaseType implements IntInterface {
        };

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
}
