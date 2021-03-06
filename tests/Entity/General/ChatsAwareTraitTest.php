<?php

declare(strict_types=1);

namespace Zored\Telegram\Tests\Entity\General;

use PHPUnit\Framework\TestCase;
use Zored\Telegram\Entity\Chat;
use Zored\Telegram\Entity\General\ChatsAwareTrait;

class ChatsAwareTraitTest extends TestCase
{
    public function testFindChatByTitle(): void
    {
        $chatsAware = $this->getMockForTrait(ChatsAwareTrait::class);
        $chatFoo = new Chat();
        $chatFoo->setTitle('Foo');
        $chatsAware->setChats($chats = [$chatFoo]);
        $this->assertSame($chatFoo, $chatsAware->findChatByTitle('foo'));
    }
}
