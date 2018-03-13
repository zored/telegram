<?php

namespace Zored\Telegram\Tests\Exception;

use PHPUnit\Framework\TestCase;
use Zored\Telegram\Exception\TelegramApiException;

final class GlobalExceptionTest extends TestCase
{
    public function testGetters(): void
    {
        $previous = new \Exception();

        $exception = TelegramApiException::becauseOfApiException($previous);
        $this->assertInstanceOf(TelegramApiException::class, $exception);
        $this->assertSame($previous, $exception->getPrevious());
    }
}
