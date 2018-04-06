<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Auth;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\BoolInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\StringInterface;

/**
 * @see https://core.telegram.org/method/auth.sendInvites
 * @codeCoverageIgnore
 */
class SendInvites
{
    public const ID = 1998331287;

    /** @var StringInterface[] */
    private $phone_numbers;

    /** @var StringInterface */
    private $message;

    /** @var BoolInterface */
    private $result;

    /**
     * @return StringInterface[]
     */
    public function getPhoneNumbers(): array
    {
        return $this->phone_numbers;
    }

    public function setPhoneNumbers(array $phone_numbers): self
    {
        $this->phone_numbers = $phone_numbers;

        return $this;
    }

    /**
     * @return StringInterface
     */
    public function getMessage(): StringInterface
    {
        return $this->message;
    }

    public function setMessage(StringInterface $message): self
    {
        $this->message = $message;

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
