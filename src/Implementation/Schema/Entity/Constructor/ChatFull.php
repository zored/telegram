<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\ChatFullInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\ChatParticipantsInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\PeerNotifySettingsInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\PhotoInterface;

/**
 * @see https://core.telegram.org/constructor/chatFull
 * @codeCoverageIgnore
 */
final class ChatFull implements ChatFullInterface
{
    public const ID = 1661886910;

    /** @var IntInterface */
    private $id;

    /** @var ChatParticipantsInterface */
    private $participants;

    /** @var PhotoInterface */
    private $chat_photo;

    /** @var PeerNotifySettingsInterface */
    private $notify_settings;

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

    /**
     * @return ChatParticipantsInterface
     */
    public function getParticipants(): ChatParticipantsInterface
    {
        return $this->participants;
    }

    public function setParticipants(ChatParticipantsInterface $participants): self
    {
        $this->participants = $participants;

        return $this;
    }

    /**
     * @return PhotoInterface
     */
    public function getChatPhoto(): PhotoInterface
    {
        return $this->chat_photo;
    }

    public function setChatPhoto(PhotoInterface $chat_photo): self
    {
        $this->chat_photo = $chat_photo;

        return $this;
    }

    /**
     * @return PeerNotifySettingsInterface
     */
    public function getNotifySettings(): PeerNotifySettingsInterface
    {
        return $this->notify_settings;
    }

    public function setNotifySettings(PeerNotifySettingsInterface $notify_settings): self
    {
        $this->notify_settings = $notify_settings;

        return $this;
    }
}
