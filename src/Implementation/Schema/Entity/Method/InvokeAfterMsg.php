<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\LongInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Unknown1Interface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Unknown2Interface;

/**
 * @see https://core.telegram.org/method/invokeAfterMsg
 * @codeCoverageIgnore
 */
class InvokeAfterMsg
{
    public const ID = -878758099;

    /** @var LongInterface */
    private $msg_id;

    /** @var Unknown1Interface */
    private $query;

    /** @var Unknown2Interface */
    private $result;

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
     * @return Unknown1Interface
     */
    public function getQuery(): Unknown1Interface
    {
        return $this->query;
    }

    public function setQuery(Unknown1Interface $query): self
    {
        $this->query = $query;

        return $this;
    }

    /**
     * @return Unknown2Interface
     */
    public function getResult(): Unknown2Interface
    {
        return $this->result;
    }

    public function setResult(Unknown2Interface $result): self
    {
        $this->result = $result;

        return $this;
    }
}
