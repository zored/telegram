<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Messages;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputPeerInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Messages\MessagesInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\MessagesFilterInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\StringInterface;

/**
 * @see https://core.telegram.org/method/messages.search
 * @codeCoverageIgnore
 */
class Search
{
    public const ID = 132772523;

    /** @var InputPeerInterface */
    private $peer;

    /** @var StringInterface */
    private $q;

    /** @var MessagesFilterInterface */
    private $filter;

    /** @var IntInterface */
    private $min_date;

    /** @var IntInterface */
    private $max_date;

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
     * @return StringInterface
     */
    public function getQ(): StringInterface
    {
        return $this->q;
    }

    public function setQ(StringInterface $q): self
    {
        $this->q = $q;

        return $this;
    }

    /**
     * @return MessagesFilterInterface
     */
    public function getFilter(): MessagesFilterInterface
    {
        return $this->filter;
    }

    public function setFilter(MessagesFilterInterface $filter): self
    {
        $this->filter = $filter;

        return $this;
    }

    /**
     * @return IntInterface
     */
    public function getMinDate(): IntInterface
    {
        return $this->min_date;
    }

    public function setMinDate(int $min_date): self
    {
        $this->min_date = new class($min_date) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }

    /**
     * @return IntInterface
     */
    public function getMaxDate(): IntInterface
    {
        return $this->max_date;
    }

    public function setMaxDate(int $max_date): self
    {
        $this->max_date = new class($max_date) extends AbstractBaseType implements IntInterface {
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
