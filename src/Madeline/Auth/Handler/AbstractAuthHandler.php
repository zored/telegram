<?php

namespace Zored\Telegram\Madeline\Auth\Handler;

use BadMethodCallException;
use danog\MadelineProto\MTProto;
use Zored\Telegram\Madeline\Config\Auth\AuthConfigInterface;

abstract class AbstractAuthHandler implements AuthHandlerInterface
{
    /**
     * @var bool
     */
    private $suitsCalled = false;

    /**
     * @var AuthConfigInterface
     */
    protected $config;

    /**
     * {@inheritdoc}
     */
    public function suits(AuthConfigInterface $config): bool
    {
        $this->suitsCalled = true;
        $this->config = $config;

        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function auth(MTProto $proto): void
    {
        if (!$this->suitsCalled) {
            throw new BadMethodCallException('You must call ' . __CLASS__ . '::suits first.');
        }
    }

    protected function isAuthorized(MTProto $proto): bool
    {
        return MTProto::LOGGED_IN === $proto->authorized;
    }
}
