<?php

declare(strict_types=1);

namespace Zored\Telegram\Entity;

use Zored\Telegram\Entity\General\ChatsAwareTrait;
use Zored\Telegram\Entity\General\UsersAwareTrait;

class Dialogs
{
    use UsersAwareTrait;
    use ChatsAwareTrait;

    private const SAMPLE = <<<JSON
{
  "_": "messages.dialogsSlice",
  "count": 38,
  "dialogs": [],
  "messages": [],
  "chats": [],
  "users": []
}
JSON;
}
