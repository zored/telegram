<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Messages;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\BoolInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputEncryptedChatInterface;

/**
 * @see https://core.telegram.org/method/messages.reportEncryptedSpam
 * @codeCoverageIgnore
 */
class ReportEncryptedSpam
{
    public const ID = 1259113487;

    /** @var InputEncryptedChatInterface */
    private $peer;

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
