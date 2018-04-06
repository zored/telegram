<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\EncryptedMessageInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\UpdateInterface;

/**
 * @see https://core.telegram.org/constructor/updateNewEncryptedMessage
 * @codeCoverageIgnore
 */
final class UpdateNewEncryptedMessage implements UpdateInterface
{
    public const ID = 314359194;

    /** @var EncryptedMessageInterface */
    private $message;

    /** @var IntInterface */
    private $qts;

    /**
     * @return EncryptedMessageInterface
     */
    public function getMessage(): EncryptedMessageInterface
    {
        return $this->message;
    }

    public function setMessage(EncryptedMessageInterface $message): self
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @return IntInterface
     */
    public function getQts(): IntInterface
    {
        return $this->qts;
    }

    public function setQts(int $qts): self
    {
        $this->qts = new class($qts) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }
}
