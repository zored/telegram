<?php

declare(strict_types=1);

namespace Zored\Telegram\Tests\Factory;

use PHPUnit\Framework\TestCase;
use Zored\Telegram\Factory\BotBuilder;
use Zored\Telegram\Factory\TelegramApiFactoryInterface;

final class BotBuilderTest extends TestCase
{
    public function testCreate(): void
    {
        (new BotBuilder())
            ->setTelegramApiFactory($this->createMock(TelegramApiFactoryInterface::class))
            ->create();

        $this->assertTrue(true, 'No assertions.');
    }
}
