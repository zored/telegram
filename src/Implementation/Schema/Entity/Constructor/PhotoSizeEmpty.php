<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\PhotoSizeInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\StringInterface;

/**
 * @see https://core.telegram.org/constructor/photoSizeEmpty
 * @codeCoverageIgnore
 */
final class PhotoSizeEmpty implements PhotoSizeInterface
{
    public const ID = 236446268;

    /** @var StringInterface */
    private $type;

    /**
     * @return StringInterface
     */
    public function getType(): StringInterface
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = new class($type) extends AbstractBaseType implements StringInterface {
        };

        return $this;
    }
}
