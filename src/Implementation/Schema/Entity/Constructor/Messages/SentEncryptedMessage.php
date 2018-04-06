<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor\Messages;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Messages\SentEncryptedMessageInterface;

/**
 * @see https://core.telegram.org/constructor/messages.sentEncryptedMessage
 * @codeCoverageIgnore
 */
final class SentEncryptedMessage implements SentEncryptedMessageInterface
{
    public const ID = 1443858741;

    /** @var IntInterface */
    private $date;

    /**
     * @return IntInterface
     */
    public function getDate(): IntInterface
    {
        return $this->date;
    }

    public function setDate(int $date): self
    {
        $this->date = new class($date) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }
}
