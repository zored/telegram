<?php

namespace Zored\Telegram\Tests\Madeline\Config\Auth;

use PHPUnit\Framework\TestCase;
use Zored\Telegram\Madeline\Config\Auth\AbstractAuthConfig;

final class AbstractAuthConfigTest extends TestCase
{
    public function testAccessors(): void
    {
        $auth = $this->getMockForAbstractClass(AbstractAuthConfig::class);
        $expireSeconds = 123;
        $this->assertSame($expireSeconds, $auth->setExpireSeconds($expireSeconds)->getExpireSeconds());
    }
}
