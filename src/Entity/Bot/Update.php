<?php

namespace Zored\Telegram\Entity\Bot;
use Zored\Telegram\Bot\Update\UpdateInterface;
use Zored\Telegram\Entity\Bot\Update\UpdateData;

/**
 * @link vendor/danog/madelineproto/bot.php
 */
final class Update implements UpdateInterface
{

    private $update_id;

    /**
     * @var UpdateData
     */
    private $update;
}
