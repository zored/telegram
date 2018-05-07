<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\LongInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\MessageInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\ObjectInterface;

/**
 * @see https://core.telegram.org/constructor/message
 * @codeCoverageIgnore
 */
final class Message implements MessageInterface
{
    public const ID = 1538843921;

    /** @var LongInterface */
    private $msg_id;

    /** @var IntInterface */
    private $seqno;

    /** @var IntInterface */
    private $bytes;

    /** @var ObjectInterface */
    private $body;

    /**
     * @return LongInterface
     */
    public function getMsgId(): LongInterface
    {
        return $this->msg_id;
    }

    public function setMsgId(int $msg_id): self
    {
        $this->msg_id = new class($msg_id) extends AbstractBaseType implements LongInterface {
        };

        return $this;
    }

    /**
     * @return IntInterface
     */
    public function getSeqno(): IntInterface
    {
        return $this->seqno;
    }

    public function setSeqno(int $seqno): self
    {
        $this->seqno = new class($seqno) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }

    /**
     * @return IntInterface
     */
    public function getBytes(): IntInterface
    {
        return $this->bytes;
    }

    public function setBytes(int $bytes): self
    {
        $this->bytes = new class($bytes) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }

    /**
     * @return ObjectInterface
     */
    public function getBody(): ObjectInterface
    {
        return $this->body;
    }

    public function setBody(ObjectInterface $body): self
    {
        $this->body = $body;

        return $this;
    }
}
