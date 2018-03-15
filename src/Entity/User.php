<?php

namespace Zored\Telegram\Entity;

use JMS\Serializer\Annotation as Serializer;

final class User
{
    private const EXAMPLE = <<<JSON
{
  "_": "user",
  "self": false,
  "contact": true,
  "mutual_contact": false,
  "deleted": false,
  "bot": false,
  "bot_chat_history": false,
  "bot_nochats": false,
  "verified": false,
  "restricted": false,
  "min": false,
  "bot_inline_geo": false,
  "id": 123,
  "access_hash": 123,
  "first_name": "Ivan",
  "last_name": "Ivanov",
  "phone": "7534534535",
  "photo": {
    "_": "userProfilePhoto",
    "photo_id": 1,
    "photo_small": {
      "_": "fileLocation",
      "dc_id": 2,
      "volume_id": 1,
      "local_id": 1,
      "secret": -1
    },
    "photo_big": {
      "_": "fileLocation",
      "dc_id": 2,
      "volume_id": 1,
      "local_id": 1,
      "secret": -1
    }
  },
  "status": {
    "_": "userStatusRecently"
  }
}
JSON;

    /**
     * @Serializer\Type("integer")
     *
     * @var int
     */
    private $id;

    /**
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $first_name;

    /**
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $last_name;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getFullName(): string
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function getFirstName(): string
    {
        return $this->first_name;
    }

    public function setFirstName(string $first_name): self
    {
        $this->first_name = $first_name;

        return $this;
    }

    public function getLastName(): string
    {
        return $this->last_name;
    }

    public function setLastName(string $last_name): self
    {
        $this->last_name = $last_name;

        return $this;
    }
}
