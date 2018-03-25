<?php

declare(strict_types=1);

namespace Zored\Telegram\Entity\Bot\Update;

use JMS\Serializer\Annotation as Serializer;
use Zored\Telegram\Entity\General\AbstractEntity;

class ShortSentMessage extends AbstractEntity
{
    private const SAMPLE = <<<JSON
{
  "_": "updateShortSentMessage",
  "out": true,
  "id": 123,
  "pts": 124,
  "pts_count": 1,
  "date": 1521034110,
  "media": {
	"_": "messageMediaEmpty"
  },
  "entities": []
}
JSON;

    /**
     * @Serializer\Type("integer")
     *
     * @var int
     */
    private $id;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }
}
