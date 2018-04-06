<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Messages;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\LongInterface;

/**
 * @see https://core.telegram.org/method/messages.receivedQueue
 * @codeCoverageIgnore
 */
class ReceivedQueue
{
    public const ID = 1436924774;

    /** @var IntInterface */
    private $max_qts;

    /** @var LongInterface[] */
    private $result;

    /**
     * @return IntInterface
     */
    public function getMaxQts(): IntInterface
    {
        return $this->max_qts;
    }

    public function setMaxQts(int $max_qts): self
    {
        $this->max_qts = new class($max_qts) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }

    /**
     * @return LongInterface[]
     */
    public function getResult(): array
    {
        return $this->result;
    }

    public function setResult(array $result): self
    {
        $this->result = array_map(function (int $result) {
            return new class($result) extends AbstractBaseType implements LongInterface {
            };
        }, $result);

        return $this;
    }
}
