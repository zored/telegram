<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Messages;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputPeerInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Messages\StatedMessagesInterface;

/**
 * @see https://core.telegram.org/method/messages.forwardMessages
 * @codeCoverageIgnore
 */
class ForwardMessages
{
    public const ID = 1363988751;

    /** @var InputPeerInterface */
    private $peer;

    /** @var IntInterface[] */
    private $id;

    /** @var StatedMessagesInterface */
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
     * @return IntInterface[]
     */
    public function getId(): array
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
     * @return StatedMessagesInterface
     */
    public function getResult(): StatedMessagesInterface
    {
        return $this->result;
    }

    public function setResult(StatedMessagesInterface $result): self
    {
        $this->result = $result;

        return $this;
    }
}
