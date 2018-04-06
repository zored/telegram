<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputFileInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\LongInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\StringInterface;

/**
 * @see https://core.telegram.org/constructor/inputFileBig
 * @codeCoverageIgnore
 */
final class InputFileBig implements InputFileInterface
{
    public const ID = -95482955;

    /** @var LongInterface */
    private $id;

    /** @var IntInterface */
    private $parts;

    /** @var StringInterface */
    private $name;

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
     * @return IntInterface
     */
    public function getParts(): IntInterface
    {
        return $this->parts;
    }

    public function setParts(int $parts): self
    {
        $this->parts = new class($parts) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }

    /**
     * @return StringInterface
     */
    public function getName(): StringInterface
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = new class($name) extends AbstractBaseType implements StringInterface {
        };

        return $this;
    }
}
