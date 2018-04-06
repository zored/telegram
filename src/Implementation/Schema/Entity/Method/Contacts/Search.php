<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Contacts;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Contacts\FoundInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\StringInterface;

/**
 * @see https://core.telegram.org/method/contacts.search
 * @codeCoverageIgnore
 */
class Search
{
    public const ID = 301470424;

    /** @var StringInterface */
    private $q;

    /** @var IntInterface */
    private $limit;

    /** @var FoundInterface */
    private $result;

    /**
     * @return StringInterface
     */
    public function getQ(): StringInterface
    {
        return $this->q;
    }

    public function setQ(string $q): self
    {
        $this->q = new class($q) extends AbstractBaseType implements StringInterface {
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
     * @return FoundInterface
     */
    public function getResult(): FoundInterface
    {
        return $this->result;
    }

    public function setResult(FoundInterface $result): self
    {
        $this->result = $result;

        return $this;
    }
}
