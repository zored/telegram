<?php

declare(strict_types=1);

namespace Zored\Telegram\Entity\Bot\Update;

use JMS\Serializer\Annotation as Serializer;
use Zored\Telegram\Entity\Bot\Update\UpdateData\Message;
use Zored\Telegram\Entity\General\AbstractEntity;

class UpdateData extends AbstractEntity
{
    /**
     * @Serializer\Type("Zored\Telegram\Entity\Bot\Update\UpdateData\Message")
     *
     * @var Message|null
     */
    private $message;

    public function isIdUpdate(): bool
    {
        return 'updateMessageID' === $this->getEntityType();
    }

    public function isNewMessage(): bool
    {
        return \in_array($this->getEntityType(), [
            'updateNewChannelMessage',
            'updateNewMessage',
        ], true);
    }

    public function getMessage(): ?Message
    {
        return $this->message;
    }

    public function setMessage(?Message $message): self
    {
        $this->message = $message;

        return $this;
    }
}
