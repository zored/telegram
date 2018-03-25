<?php

declare(strict_types=1);

namespace Zored\Telegram\Tests\Exception;

use PHPUnit\Framework\TestCase;
use Zored\Telegram\Exception\TelegramApiException;
use Zored\Telegram\Exception\TelegramApiFactoryException;

class GlobalExceptionTest extends TestCase
{
    public function testGetters(): void
    {
        $previous = new \Exception();

        $exception = TelegramApiException::becauseOfApiException($previous);
        $this->assertInstanceOf(TelegramApiException::class, $exception);
        $this->assertSame($previous, $exception->getPrevious());

        $exception = TelegramApiFactoryException::becauseOfApiException($previous);
        $this->assertInstanceOf(TelegramApiFactoryException::class, $exception);
        $this->assertSame($previous, $exception->getPrevious());
    }
}
