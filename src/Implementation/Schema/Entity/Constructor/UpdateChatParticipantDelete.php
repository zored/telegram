<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\UpdateInterface;

/**
 * @see https://core.telegram.org/constructor/updateChatParticipantDelete
 * @codeCoverageIgnore
 */
final class UpdateChatParticipantDelete implements UpdateInterface
{
    public const ID = 1851755554;

    /** @var IntInterface */
    private $chat_id;

    /** @var IntInterface */
    private $user_id;

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
    public function getUserId(): IntInterface
    {
        return $this->user_id;
    }

    public function setUserId(int $user_id): self
    {
        $this->user_id = new class($user_id) extends AbstractBaseType implements IntInterface {
        };

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
