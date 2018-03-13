<?php

namespace Zored\Telegram\Entity;

use Zored\Telegram\Entity\General\UsersAwareTrait;

final class Contacts
{
    use UsersAwareTrait;

    private const EXAMPLE = <<<JSON
{
  "_": "contacts.contacts",
  "contacts": [
	{
	  "_": "contact",
	  "user_id": 1,
	  "mutual": true
	}
  ],
  "saved_count": 90,
  "users": []
}
JSON;
}
