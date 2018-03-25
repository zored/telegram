<?php

declare(strict_types=1);

namespace Zored\Telegram\Madeline\Auth\Prompt;

/**
 * @codeCoverageIgnore
 * - because of readline and simplicity.
 */
class ReadlinePrompt implements PromptInterface
{
    /**
     * {@inheritdoc}
     */
    public function prompt(string $title, bool $isPassword = false): string
    {
        return \readline($title);
    }
}
