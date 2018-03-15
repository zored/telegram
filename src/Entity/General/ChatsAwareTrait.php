<?php

namespace Zored\Telegram\Entity\General;

use JMS\Serializer\Annotation as Serializer;
use Zored\Telegram\Entity\Chat;
use Zored\Telegram\Util\Collection\FuzzyMatcher;
use Zored\Telegram\Util\Collection\StringMatcherInterface;

trait ChatsAwareTrait
{
    /**
     * @Serializer\Type("array<Zored\Telegram\Entity\Chat>")
     *
     * @var Chat[]
     */
    private $chats = [];

    /**
     * @return Chat[]
     */
    public function getChats(): array
    {
        return $this->chats;
    }

    public function findChatByTitle(string $title): ?Chat
    {
        /** @noinspection PhpIncompatibleReturnTypeInspection */
        return $this->getChatMatcher()->matchFirst($title, function (Chat $chat) {
            return $chat->getTitle();
        });
    }

    public function setChats(array $chats): self
    {
        $this->chats = $chats;

        return $this;
    }

    private function getChatMatcher(): StringMatcherInterface
    {
        return new FuzzyMatcher($this->getChats());
    }
}
