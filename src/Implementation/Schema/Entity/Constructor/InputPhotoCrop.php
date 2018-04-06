<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\DoubleInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputPhotoCropInterface;

/**
 * @see https://core.telegram.org/constructor/inputPhotoCrop
 * @codeCoverageIgnore
 */
final class InputPhotoCrop implements InputPhotoCropInterface
{
    public const ID = -644787419;

    /** @var DoubleInterface */
    private $crop_left;

    /** @var DoubleInterface */
    private $crop_top;

    /** @var DoubleInterface */
    private $crop_width;

    /**
     * @return DoubleInterface
     */
    public function getCropLeft(): DoubleInterface
    {
        return $this->crop_left;
    }

    public function setCropLeft(float $crop_left): self
    {
        $this->crop_left = new class($crop_left) extends AbstractBaseType implements DoubleInterface {
        };

        return $this;
    }

    /**
     * @return DoubleInterface
     */
    public function getCropTop(): DoubleInterface
    {
        return $this->crop_top;
    }

    public function setCropTop(float $crop_top): self
    {
        $this->crop_top = new class($crop_top) extends AbstractBaseType implements DoubleInterface {
        };

        return $this;
    }

    /**
     * @return DoubleInterface
     */
    public function getCropWidth(): DoubleInterface
    {
        return $this->crop_width;
    }

    public function setCropWidth(float $crop_width): self
    {
        $this->crop_width = new class($crop_width) extends AbstractBaseType implements DoubleInterface {
        };

        return $this;
    }
}
