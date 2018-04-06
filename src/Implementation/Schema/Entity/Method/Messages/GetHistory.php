<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Messages;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputPeerInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Messages\MessagesInterface;

/**
 * @see https://core.telegram.org/method/messages.getHistory
 * @codeCoverageIgnore
 */
class GetHistory
{
    public const ID = -1834885329;

    /** @var InputPeerInterface */
    private $peer;

    /** @var IntInterface */
    private $offset;

    /** @var IntInterface */
    private $max_id;

    /** @var IntInterface */
    private $limit;

    /** @var MessagesInterface */
    private $result;

    /**
     * @return InputPeerInterface
     */
    public function getPeer(): InputPeerInterface
    {
        return $this->peer;
    }

    public function setPeer(InputPeerInterface $peer): self
    {
        $this->peer = $peer;

        return $this;
    }

    /**
     * @return IntInterface
     */
    public function getOffset(): IntInterface
    {
        return $this->offset;
    }

    public function setOffset(int $offset): self
    {
        $this->offset = new class($offset) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }

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
     * @return IntInterface
     */
    public function getLimit(): IntInterface
    {
        return $this->limit;
    }

    public function setLimit(int $limit): self
    {
        $this->limit = new class($limit) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }

    /**
     * @return MessagesInterface
     */
    public function getResult(): MessagesInterface
    {
        return $this->result;
    }

    public function setResult(MessagesInterface $result): self
    {
        $this->result = $result;

        return $this;
    }
}
