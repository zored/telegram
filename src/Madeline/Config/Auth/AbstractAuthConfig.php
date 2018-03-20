<?php

declare(strict_types=1);

namespace Zored\Telegram\Madeline\Config\Auth;

abstract class AbstractAuthConfig implements AuthConfigInterface
{
    /**
     * @var bool
     */
    private $handleUpdates = false;

    /**
     * @var int
     */
    private $expireSeconds = 86400;

    /**
     * {@inheritdoc}
     */
    public function getExpireSeconds(): int
    {
        return $this->expireSeconds;
    }

    public function setExpireSeconds(int $expireSeconds): self
    {
        $this->expireSeconds = $expireSeconds;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function isHandleUpdates(): bool
    {
        return $this->handleUpdates;
    }

    /**
     * {@inheritdoc}
     */
    public function setHandleUpdates(bool $handleUpdates): AuthConfigInterface
    {
        $this->handleUpdates = $handleUpdates;

        return $this;
    }
}
