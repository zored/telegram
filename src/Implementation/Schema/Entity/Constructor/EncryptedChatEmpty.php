<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\EncryptedChatInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;

/**
 * @see https://core.telegram.org/constructor/encryptedChatEmpty
 * @codeCoverageIgnore
 */
final class EncryptedChatEmpty implements EncryptedChatInterface
{
    public const ID = -1417756512;

    /** @var IntInterface */
    private $id;

    /**
     * @return IntInterface
     */
    public function getId(): IntInterface
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = new class($id) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }
}
