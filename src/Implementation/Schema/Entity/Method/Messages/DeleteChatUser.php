<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Messages;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputUserInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Messages\StatedMessageInterface;

/**
 * @see https://core.telegram.org/method/messages.deleteChatUser
 * @codeCoverageIgnore
 */
class DeleteChatUser
{
    public const ID = -1010447069;

    /** @var IntInterface */
    private $chat_id;

    /** @var InputUserInterface */
    private $user_id;

    /** @var StatedMessageInterface */
    private $result;

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
     * @return InputUserInterface
     */
    public function getUserId(): InputUserInterface
    {
        return $this->user_id;
    }

    public function setUserId(InputUserInterface $user_id): self
    {
        $this->user_id = $user_id;

        return $this;
    }

    /**
     * @return StatedMessageInterface
     */
    public function getResult(): StatedMessageInterface
    {
        return $this->result;
    }

    public function setResult(StatedMessageInterface $result): self
    {
        $this->result = $result;

        return $this;
    }
}