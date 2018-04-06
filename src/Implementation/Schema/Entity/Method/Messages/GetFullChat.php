<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Messages;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Messages\ChatFullInterface;

/**
 * @see https://core.telegram.org/method/messages.getFullChat
 * @codeCoverageIgnore
 */
class GetFullChat
{
    public const ID = 998448230;

    /** @var IntInterface */
    private $chat_id;

    /** @var ChatFullInterface */
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
     * @return ChatFullInterface
     */
    public function getResult(): ChatFullInterface
    {
        return $this->result;
    }

    public function setResult(ChatFullInterface $result): self
    {
        $this->result = $result;

        return $this;
    }
}
