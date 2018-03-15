<?php

declare(strict_types=1);

namespace Zored\Telegram\Madeline\Auth\Prompt;

interface PromptInterface
{
    public function prompt(string $title, bool $isPassword = false): string;
}
