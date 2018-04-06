<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Messages;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;

/**
 * @see https://core.telegram.org/method/messages.receivedMessages
 * @codeCoverageIgnore
 */
class ReceivedMessages
{
    public const ID = 682347368;

    /** @var IntInterface */
    private $max_id;

    /** @var IntInterface[] */
    private $result;

    /**
     * @return IntInterface
     */
    public function getMaxId(): IntInterface
    {
        return $this->max_id;
    }

    public function setMaxId(int $max_id): self
    {
        $this->max_id = new class($max_id) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }

    /**
     * @return IntInterface[]
     */
    public function getResult(): array
    {
        return $this->result;
    }

    public function setResult(int $result): self
    {
        $this->result = new class($result) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }
}
