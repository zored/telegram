<?php

declare(strict_types=1);

namespace Zored\Telegram\Entity\Control\Message;

interface MessageInterface
{
    public function getFormat(): string;

    public function getContent(): string;

    public function isLinkPreview(): bool;
}
