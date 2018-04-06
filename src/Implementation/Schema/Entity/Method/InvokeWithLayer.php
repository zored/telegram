<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Unknown1Interface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Unknown2Interface;

/**
 * @see https://core.telegram.org/method/invokeWithLayer
 * @codeCoverageIgnore
 */
class InvokeWithLayer
{
    public const ID = -627372787;

    /** @var IntInterface */
    private $layer;

    /** @var Unknown1Interface */
    private $query;

    /** @var Unknown2Interface */
    private $result;

    /**
     * @return IntInterface
     */
    public function getLayer(): IntInterface
    {
        return $this->layer;
    }

    public function setLayer(int $layer): self
    {
        $this->layer = new class($layer) extends AbstractBaseType implements IntInterface {
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
