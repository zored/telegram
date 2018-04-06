<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputVideoInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\LongInterface;

/**
 * @see https://core.telegram.org/constructor/inputVideo
 * @codeCoverageIgnore
 */
final class InputVideo implements InputVideoInterface
{
    public const ID = -296249774;

    /** @var LongInterface */
    private $id;

    /** @var LongInterface */
    private $access_hash;

    /**
     * @return LongInterface
     */
    public function getId(): LongInterface
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = new class($id) extends AbstractBaseType implements LongInterface {
        };

        return $this;
    }

    /**
     * @return LongInterface
     */
    public function getAccessHash(): LongInterface
    {
        return $this->access_hash;
    }

    public function setAccessHash(int $access_hash): self
    {
        $this->access_hash = new class($access_hash) extends AbstractBaseType implements LongInterface {
        };

        return $this;
    }
}