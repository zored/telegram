<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\DoubleInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputAppEventInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\LongInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\StringInterface;

/**
 * @see https://core.telegram.org/constructor/inputAppEvent
 * @codeCoverageIgnore
 */
final class InputAppEvent implements InputAppEventInterface
{
    public const ID = 1996904104;

    /** @var DoubleInterface */
    private $time;

    /** @var StringInterface */
    private $type;

    /** @var LongInterface */
    private $peer;

    /** @var StringInterface */
    private $data;

    /**
     * @return DoubleInterface
     */
    public function getTime(): DoubleInterface
    {
        return $this->time;
    }

    public function setTime(float $time): self
    {
        $this->time = new class($time) extends AbstractBaseType implements DoubleInterface {
        };

        return $this;
    }

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

    /**
     * @return LongInterface
     */
    public function getPeer(): LongInterface
    {
        return $this->peer;
    }

    public function setPeer(int $peer): self
    {
        $this->peer = new class($peer) extends AbstractBaseType implements LongInterface {
        };

        return $this;
    }

    /**
     * @return StringInterface
     */
    public function getData(): StringInterface
    {
        return $this->data;
    }

    public function setData(string $data): self
    {
        $this->data = new class($data) extends AbstractBaseType implements StringInterface {
        };

        return $this;
    }
}
