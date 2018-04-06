<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor\Help;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Help\InviteTextInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\StringInterface;

/**
 * @see https://core.telegram.org/constructor/help.inviteText
 * @codeCoverageIgnore
 */
final class InviteText implements InviteTextInterface
{
    public const ID = 415997816;

    /** @var StringInterface */
    private $message;

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
}
