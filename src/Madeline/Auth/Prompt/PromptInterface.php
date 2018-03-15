<?php

namespace Zored\Telegram\Madeline\Auth\Prompt;

interface PromptInterface
{
    public function prompt(string $title, bool $isPassword = false): string;
}
