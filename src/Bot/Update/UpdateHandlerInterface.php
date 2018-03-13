<?php

namespace Zored\Telegram\Bot\Update;

interface UpdateHandlerInterface
{
    public function handle(UpdateInterface $update): void;
}
