<?php

namespace Zored\Telegram\Madeline\Auth;

use function readline;

final class ReadlinePrompt implements PromptInterface
{
    /**
     * {@inheritDoc}
     */
    public function prompt(string $title): string
    {
        return readline($title);
    }

}
