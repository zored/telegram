<?php

namespace Zored\Telegram\Madeline\Auth\Prompt;

/**
 * @codeCoverageIgnore
 * - because of readline and simplicity.
 */
final class ReadlinePrompt implements PromptInterface
{
    /**
     * {@inheritdoc}
     */
    public function prompt(string $title, bool $isPassword = false): string
    {
        return \readline($title);
    }
}
