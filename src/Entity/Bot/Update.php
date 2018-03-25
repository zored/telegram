<?php

declare(strict_types=1);

namespace Zored\Telegram\Entity\Bot;

use JMS\Serializer\Annotation as Serializer;
use Zored\Telegram\Entity\Bot\Update\UpdateData;

/**
 * @see vendor/danog/madelineproto/bot.php
 */
class Update
{
    /**
     * @Serializer\Type("integer")
     *
     * @var int
     */
    private $update_id;

    /**
     * @Serializer\Type("Zored\Telegram\Entity\Bot\Update\UpdateData")
     *
     * @var UpdateData
     */
    private $update;

    public function getUpdateId(): int
    {
        return $this->update_id;
    }

    public function setUpdateId(int $update_id): self
    {
        $this->update_id = $update_id;

        return $this;
    }

    public function getUpdate(): UpdateData
    {
        return $this->update;
    }

    public function setUpdate(UpdateData $update): self
    {
        $this->update = $update;

        return $this;
    }
}
