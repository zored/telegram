<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\DocumentInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\LongInterface;

/**
 * @see https://core.telegram.org/constructor/documentEmpty
 * @codeCoverageIgnore
 */
final class DocumentEmpty implements DocumentInterface
{
    public const ID = 922273905;

    /** @var LongInterface */
    private $id;

    /**
     * @return LongInterface
     */
    public function getId(): LongInterface
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = new class($id) extends AbstractBaseType implements LongInterface {
        };

        return $this;
    }
}
