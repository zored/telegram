<?php

declare(strict_types=1);

namespace Zored\Telegram\Madeline\Config\Auth;

use Zored\Telegram\Madeline\Auth\Prompt\PromptInterface;

final class ClientAuth extends AbstractAuthConfig
{
    /**
     * @var string
     */
    private $phone;

    /**
     * @var string|null
     */
    private $password;

    /**
     * @var string|null
     */
    private $code;

    /**
     * @var PromptInterface
     */
    private $prompt;

    public function __construct(
        string $phone,
        string $password = null,
        string $code = null,
        PromptInterface $prompt = null
    ) {
        $this->phone = $phone;
        $this->password = $password;
        $this->code = $code;
        $this->prompt = $prompt;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function getPassword(): string
    {
        return $this->password ?? $this->promptPassword('Password');
    }

    public function getCode(): string
    {
        return $this->code ?? $this->promptPassword('Code');
    }

    private function promptPassword(string $title): string
    {
        if (!$this->prompt) {
            return '';
        }

        return $this->prompt->prompt($title . ': ');
    }
}
