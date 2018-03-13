<?php

namespace Zored\Telegram\Entity\Bot;

use JMS\Serializer\Annotation as Serializer;
use Zored\Telegram\Bot\Update\UpdateInterface;
use Zored\Telegram\Entity\Bot\Update\UpdateData;

/**
 * @see vendor/danog/madelineproto/bot.php
 */
final class Update implements UpdateInterface
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

    public function setUpdateId(int $update_id): void
    {
        $this->update_id = $update_id;
    }

    public function getUpdate(): UpdateData
    {
        return $this->update;
    }

    public function setUpdate(UpdateData $update): void
    {
        $this->update = $update;
    }
}
