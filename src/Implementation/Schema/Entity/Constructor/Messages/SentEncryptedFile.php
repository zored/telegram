<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor\Messages;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\EncryptedFileInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Messages\SentEncryptedMessageInterface;

/**
 * @see https://core.telegram.org/constructor/messages.sentEncryptedFile
 * @codeCoverageIgnore
 */
final class SentEncryptedFile implements SentEncryptedMessageInterface
{
    public const ID = -1802240206;

    /** @var IntInterface */
    private $date;

    /** @var EncryptedFileInterface */
    private $file;

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

    /**
     * @return EncryptedFileInterface
     */
    public function getFile(): EncryptedFileInterface
    {
        return $this->file;
    }

    public function setFile(EncryptedFileInterface $file): self
    {
        $this->file = $file;

        return $this;
    }
}
