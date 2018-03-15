<?php

namespace Zored\Telegram\Madeline\Config\Builder;

use Zored\Telegram\Madeline\Auth\Prompt\PromptInterface;
use Zored\Telegram\Madeline\Auth\Prompt\ReadlinePrompt;
use Zored\Telegram\Madeline\Config\Auth\AbstractAuthConfig;
use Zored\Telegram\Madeline\Config\Auth\AuthType;
use Zored\Telegram\Madeline\Config\Auth\BotAuth;
use Zored\Telegram\Madeline\Config\Auth\ClientAuth;
use Zored\Telegram\Madeline\Config\Config;
use Zored\Telegram\Madeline\Config\ConfigInterface;

/**
 * @codeCoverageIgnore
 */
final class EnvConfigFactory implements ConfigFactoryInterface
{
    /**
     * @var string
     */
    private $type = AuthType::BOT;

    /**
     * @var AbstractAuthConfig
     */
    private $auth;

    /**
     * @var PromptInterface|null
     */
    private $prompt;

    public function create(): ConfigInterface
    {
        $this->setDefaultAuth();

        return (new Config(
            (int) getenv('TELEGRAM_API_ID'),
            (string) getenv('TELEGRAM_API_HASH'),
            $this->auth,
            getenv('TELEGRAM_SESSION') . '_' . $this->type
        ))->setLogLevel((int) getenv('TELEGRAM_LOG_LEVEL'));
    }

    public function setAuth(AbstractAuthConfig $auth): self
    {
        $this->auth = $auth;

        return $this;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    private function setDefaultAuth(): void
    {
        if ($this->auth) {
            return;
        }
        if (AuthType::CLIENT === $this->type) {
            $this->auth = new ClientAuth(
                getenv('TELEGRAM_PHONE'),
                null,
                null,
                $this->prompt ?? new ReadlinePrompt()
            );

            return;
        }

        $this->auth = new BotAuth(getenv('TELEGRAM_BOT_TOKEN'));
    }
}
