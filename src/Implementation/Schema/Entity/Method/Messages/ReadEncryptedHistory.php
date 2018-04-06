<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Messages;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\BoolInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputEncryptedChatInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;

/**
 * @see https://core.telegram.org/method/messages.readEncryptedHistory
 * @codeCoverageIgnore
 */
class ReadEncryptedHistory
{
    public const ID = 2135648522;

    /** @var InputEncryptedChatInterface */
    private $peer;

    /** @var IntInterface */
    private $max_date;

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
     * @return IntInterface
     */
    public function getMaxDate(): IntInterface
    {
        return $this->max_date;
    }

    public function setMaxDate(int $max_date): self
    {
        $this->max_date = new class($max_date) extends AbstractBaseType implements IntInterface {
        };

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
