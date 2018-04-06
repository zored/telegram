<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Messages;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\BoolInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputPeerInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Messages\AffectedHistoryInterface;

/**
 * @see https://core.telegram.org/method/messages.readHistory
 * @codeCoverageIgnore
 */
class ReadHistory
{
    public const ID = -287800122;

    /** @var InputPeerInterface */
    private $peer;

    /** @var IntInterface */
    private $max_id;

    /** @var IntInterface */
    private $offset;

    /** @var BoolInterface */
    private $read_contents;

    /** @var AffectedHistoryInterface */
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
     * @return BoolInterface
     */
    public function getReadContents(): BoolInterface
    {
        return $this->read_contents;
    }

    public function setReadContents(BoolInterface $read_contents): self
    {
        $this->read_contents = $read_contents;

        return $this;
    }

    /**
     * @return AffectedHistoryInterface
     */
    public function getResult(): AffectedHistoryInterface
    {
        return $this->result;
    }

    public function setResult(AffectedHistoryInterface $result): self
    {
        $this->result = $result;

        return $this;
    }
}
