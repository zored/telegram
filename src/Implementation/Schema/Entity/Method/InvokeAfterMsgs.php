<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\LongInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Unknown1Interface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Unknown2Interface;

/**
 * @see https://core.telegram.org/method/invokeAfterMsgs
 * @codeCoverageIgnore
 */
class InvokeAfterMsgs
{
    public const ID = 1036301552;

    /** @var LongInterface[] */
    private $msg_ids;

    /** @var Unknown1Interface */
    private $query;

    /** @var Unknown2Interface */
    private $result;

    /**
     * @return LongInterface[]
     */
    public function getMsgIds(): array
    {
        return $this->msg_ids;
    }

    public function setMsgIds(array $msg_ids): self
    {
        $this->msg_ids = array_map(function (int $msg_ids) {
            return new class($msg_ids) extends AbstractBaseType implements LongInterface {
            };
        }, $msg_ids);

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
