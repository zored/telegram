<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Messages;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputChatPhotoInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Messages\StatedMessageInterface;

/**
 * @see https://core.telegram.org/method/messages.editChatPhoto
 * @codeCoverageIgnore
 */
class EditChatPhoto
{
    public const ID = -662601187;

    /** @var IntInterface */
    private $chat_id;

    /** @var InputChatPhotoInterface */
    private $photo;

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
     * @return InputChatPhotoInterface
     */
    public function getPhoto(): InputChatPhotoInterface
    {
        return $this->photo;
    }

    public function setPhoto(InputChatPhotoInterface $photo): self
    {
        $this->photo = $photo;

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
