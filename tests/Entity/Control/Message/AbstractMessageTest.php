<?php

declare(strict_types=1);

namespace Zored\Telegram\Tests\Entity\Control\Message;

use PHPUnit\Framework\TestCase;
use Zored\Telegram\Entity\Control\Message\AbstractMessage;
use Zored\Telegram\Entity\Control\Message\HtmlMessage;
use Zored\Telegram\Entity\Control\Message\MarkdownMessage;

final class AbstractMessageTest extends TestCase
{
    public function testAbstract(): void
    {
        $message = $this->getMockForAbstractClass(AbstractMessage::class, [
            $content = 'abc',
            $isLinkPreview = true,
        ]);

        $this->assertSame($content, $message->getContent());
        $this->assertSame($isLinkPreview, $message->isLinkPreview());
    }

    public function testInstances(): void
    {
        $this->assertSame('Markdown', (new MarkdownMessage(''))->getFormat());
        $this->assertSame('HTML', (new HtmlMessage(''))->getFormat());
    }
}
