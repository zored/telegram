<?php

declare(strict_types=1);

namespace Zored\Telegram\Tests\Bot\Factory;

use PHPUnit\Framework\TestCase;
use Zored\Telegram\Bot\Factory\BotFactory;
use Zored\Telegram\Factory\TelegramApiFactoryInterface;

class BotFactoryTest extends TestCase
{
    public function testCreate(): void
    {
        (new BotFactory())
            ->setTelegramApiFactory($this->createMock(TelegramApiFactoryInterface::class))
            ->create();

        $this->assertTrue(true, 'Bot created.');
    }
}
