<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\UpdateInterface;

/**
 * @see https://core.telegram.org/constructor/updateEncryptedMessagesRead
 * @codeCoverageIgnore
 */
final class UpdateEncryptedMessagesRead implements UpdateInterface
{
    public const ID = 956179895;

    /** @var IntInterface */
    private $chat_id;

    /** @var IntInterface */
    private $max_date;

    /** @var IntInterface */
    private $date;

    /**
     * @return IntInterface
     */
    public function getChatId(): IntInterface
    {
        return $this->chat_id;
    }

    public function setChatId(int $chat_id): self
    {
        $this->chat_id = new class($chat_id) extends AbstractBaseType implements IntInterface {
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
