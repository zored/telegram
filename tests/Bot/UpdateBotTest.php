<?php

namespace Zored\Telegram\Tests\Bot;

use PHPUnit\Framework\TestCase;
use Zored\Telegram\Bot\Update\UpdateHandlerInterface;
use Zored\Telegram\Bot\UpdateBot;
use Zored\Telegram\Entity\Bot\Update;
use Zored\Telegram\TelegramApiInterface;
use Zored\Telegram\Tests\Tools\CallFirstArgument;
use Zored\Telegram\Util\Repeater\RepeaterInterface;

// TODO: test negative cases.
final class UpdateBotTest extends TestCase
{
    public function testListen()
    {
        $api = $this->createMock(TelegramApiInterface::class);
        $handler = $this->createMock(UpdateHandlerInterface::class);
        $repeater = $this->createMock(RepeaterInterface::class);
        $update = new Update();
        $updateHandlers = [$handler];
        $updates = [$update];

        $repeater
            ->expects($this->once())
            ->method('repeat')
            ->with(new CallFirstArgument());
        $api
            ->expects($this->once())
            ->method('getUpdates')
            ->willReturn($updates);
        $handler
            ->expects($this->once())
            ->method('handle')
            ->with($update);

        (new UpdateBot($api, $repeater))->listen($updateHandlers);
    }
}
