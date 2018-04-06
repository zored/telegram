<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\ChatParticipantInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\ChatParticipantsInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;

/**
 * @see https://core.telegram.org/constructor/chatParticipants
 * @codeCoverageIgnore
 */
final class ChatParticipants implements ChatParticipantsInterface
{
    public const ID = 2017571861;

    /** @var IntInterface */
    private $chat_id;

    /** @var IntInterface */
    private $admin_id;

    /** @var ChatParticipantInterface[] */
    private $participants;

    /** @var IntInterface */
    private $version;

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
    public function getAdminId(): IntInterface
    {
        return $this->admin_id;
    }

    public function setAdminId(int $admin_id): self
    {
        $this->admin_id = new class($admin_id) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }

    /**
     * @return ChatParticipantInterface[]
     */
    public function getParticipants(): array
    {
        return $this->participants;
    }

    public function setParticipants(array $participants): self
    {
        $this->participants = $participants;

        return $this;
    }

    /**
     * @return IntInterface
     */
    public function getVersion(): IntInterface
    {
        return $this->version;
    }

    public function setVersion(int $version): self
    {
        $this->version = new class($version) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }
}
