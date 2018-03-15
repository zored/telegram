<?php

namespace Zored\Telegram\Entity\Bot\Update;

use JMS\Serializer\Annotation as Serializer;
use Zored\Telegram\Entity\Bot\Update\UpdateData\Message;
use Zored\Telegram\Entity\General\AbstractEntity;

final class UpdateData extends AbstractEntity
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
        ]);
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
