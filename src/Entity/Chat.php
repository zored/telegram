<?php

declare(strict_types=1);

namespace Zored\Telegram\Entity;

use JMS\Serializer\Annotation as Serializer;

final class Chat
{
    private const EXAMPLE = <<<JSON
{
  "_": "channel",
  "creator": false,
  "left": false,
  "editor": false,
  "broadcast": false,
  "verified": false,
  "megagroup": true,
  "restricted": false,
  "democracy": true,
  "signatures": false,
  "min": false,
  "id": 1,
  "access_hash": -1,
  "title": "Puma@CI&CD",
  "photo": {
    "_": "chatPhoto",
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
  "date": 1503318777,
  "version": 0
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
    private $title;

    public function getId(): int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }
}
