<?php

namespace Zored\Telegram\Madeline\Auth;

use function readline;

/**
 * @codeCoverageIgnore
 * - because of readline and simplicity.
 */
final class ReadlinePrompt implements PromptInterface
{
    /**
     * {@inheritdoc}
     */
    public function prompt(string $title): string
    {
        return readline($title);
    }
}
