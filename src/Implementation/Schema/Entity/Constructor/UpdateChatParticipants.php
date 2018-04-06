<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\ChatParticipantsInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\UpdateInterface;

/**
 * @see https://core.telegram.org/constructor/updateChatParticipants
 * @codeCoverageIgnore
 */
final class UpdateChatParticipants implements UpdateInterface
{
    public const ID = 125178264;

    /** @var ChatParticipantsInterface */
    private $participants;

    /**
     * @return ChatParticipantsInterface
     */
    public function getParticipants(): ChatParticipantsInterface
    {
        return $this->participants;
    }

    public function setParticipants(ChatParticipantsInterface $participants): self
    {
        $this->participants = $participants;

        return $this;
    }
}
