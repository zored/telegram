<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Messages;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\BoolInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputPeerInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\SendMessageActionInterface;

/**
 * @see https://core.telegram.org/method/messages.setTyping
 * @codeCoverageIgnore
 */
class SetTyping
{
    public const ID = -1551737264;

    /** @var InputPeerInterface */
    private $peer;

    /** @var SendMessageActionInterface */
    private $action;

    /** @var BoolInterface */
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
     * @return SendMessageActionInterface
     */
    public function getAction(): SendMessageActionInterface
    {
        return $this->action;
    }

    public function setAction(SendMessageActionInterface $action): self
    {
        $this->action = $action;

        return $this;
    }

    /**
     * @return BoolInterface
     */
    public function getResult(): BoolInterface
    {
        return $this->result;
    }

    public function setResult(BoolInterface $result): self
    {
        $this->result = $result;

        return $this;
    }
}
