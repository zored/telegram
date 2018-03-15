<?php

namespace Zored\Telegram\Madeline\Config\Auth;

abstract class AbstractAuthConfig implements AuthConfigInterface
{
    /**
     * @var int
     */
    private $expireSeconds = 86400;

    public function getExpireSeconds(): int
    {
        return $this->expireSeconds;
    }

    public function setExpireSeconds(int $expireSeconds): self
    {
        $this->expireSeconds = $expireSeconds;

        return $this;
    }
}
