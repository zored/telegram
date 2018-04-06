<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Messages;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputMediaInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputPeerInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\LongInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Messages\StatedMessageInterface;

/**
 * @see https://core.telegram.org/method/messages.sendMedia
 * @codeCoverageIgnore
 */
class SendMedia
{
    public const ID = -1547149962;

    /** @var InputPeerInterface */
    private $peer;

    /** @var InputMediaInterface */
    private $media;

    /** @var LongInterface */
    private $random_id;

    /** @var StatedMessageInterface */
    private $result;

    /**
     * @return InputPeerInterface
     */
    public function getPeer(): InputPeerInterface
    {
        return $this->peer;
    }

    public function setPeer(InputPeerInterface $peer): self
    {
        $this->peer = $peer;

        return $this;
    }

    /**
     * @return InputMediaInterface
     */
    public function getMedia(): InputMediaInterface
    {
        return $this->media;
    }

    public function setMedia(InputMediaInterface $media): self
    {
        $this->media = $media;

        return $this;
    }

    /**
     * @return LongInterface
     */
    public function getRandomId(): LongInterface
    {
        return $this->random_id;
    }

    public function setRandomId(int $random_id): self
    {
        $this->random_id = new class($random_id) extends AbstractBaseType implements LongInterface {
        };

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
