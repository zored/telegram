<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Contacts;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Contacts\BlockedInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;

/**
 * @see https://core.telegram.org/method/contacts.getBlocked
 * @codeCoverageIgnore
 */
class GetBlocked
{
    public const ID = -176409329;

    /** @var IntInterface */
    private $offset;

    /** @var IntInterface */
    private $limit;

    /** @var BlockedInterface */
    private $result;

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
     * @return BlockedInterface
     */
    public function getResult(): BlockedInterface
    {
        return $this->result;
    }

    public function setResult(BlockedInterface $result): self
    {
        $this->result = $result;

        return $this;
    }
}
