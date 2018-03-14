<?php

namespace Zored\Telegram\Madeline\Auth;

interface PromptInterface
{
    public function prompt(string $title, bool $isPassword = false): string;
}
