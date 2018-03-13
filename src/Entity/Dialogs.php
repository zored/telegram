<?php

namespace Zored\Telegram\Entity;

use Zored\Telegram\Entity\General\ChatsAwareTrait;
use Zored\Telegram\Entity\General\UsersAwareTrait;

final class Dialogs
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
