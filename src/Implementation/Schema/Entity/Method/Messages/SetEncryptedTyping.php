<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Messages;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\BoolInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputEncryptedChatInterface;

/**
 * @see https://core.telegram.org/method/messages.setEncryptedTyping
 * @codeCoverageIgnore
 */
class SetEncryptedTyping
{
    public const ID = 2031374829;

    /** @var InputEncryptedChatInterface */
    private $peer;

    /** @var BoolInterface */
    private $typing;

    /** @var BoolInterface */
    private $result;

    /**
     * @return InputEncryptedChatInterface
     */
    public function getPeer(): InputEncryptedChatInterface
    {
        return $this->peer;
    }

    public function setPeer(InputEncryptedChatInterface $peer): self
    {
        $this->peer = $peer;

        return $this;
    }

    /**
     * @return BoolInterface
     */
    public function getTyping(): BoolInterface
    {
        return $this->typing;
    }

    public function setTyping(BoolInterface $typing): self
    {
        $this->typing = $typing;

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
