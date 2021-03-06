<?php

declare(strict_types=1);

namespace Zored\Telegram\Entity;

use Zored\Telegram\Entity\General\UsersAwareTrait;

class Contacts
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
