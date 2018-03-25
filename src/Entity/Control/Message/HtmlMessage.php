<?php

declare(strict_types=1);

namespace Zored\Telegram\Entity\Control\Message;

class HtmlMessage extends AbstractMessage
{
    public function getFormat(): string
    {
        return 'HTML';
    }
}
