<?php

declare(strict_types=1);

namespace Zored\Telegram\Tests\Madeline\Config\Auth;

use PHPUnit\Framework\TestCase;
use Zored\Telegram\Madeline\Config\Auth\AbstractAuthConfig;

class AbstractAuthConfigTest extends TestCase
{
    public function testAccessors(): void
    {
        $auth = $this->getMockForAbstractClass(AbstractAuthConfig::class);
        $auth
            ->setExpireSeconds($expireSeconds = 123)
            ->setHandleUpdates($handleUpdates = false);
        $this->assertSame($expireSeconds, $auth->getExpireSeconds());
        $this->assertSame($handleUpdates, $auth->isHandleUpdates());
    }
}
