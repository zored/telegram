<?php

declare(strict_types=1);

namespace Zored\Telegram\Madeline\Config\Auth;

class BotAuth extends AbstractAuthConfig
{
    /**
     * @var string
     */
    private $token;

    /**
     * @param string $token
     */
    public function __construct(string $token)
    {
        $this->token = $token;
    }

    public function getToken(): string
    {
        return $this->token;
    }
}
