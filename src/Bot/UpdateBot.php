<?php

declare(strict_types=1);

namespace Zored\Telegram\Bot;

use Zored\Telegram\Entity\Bot\Update;
use Zored\Telegram\TelegramApiInterface;
use Zored\Telegram\Util\Repeater\Repeater;
use Zored\Telegram\Util\Repeater\RepeaterInterface;

class UpdateBot implements BotInterface
{
    /**
     * @var TelegramApiInterface
     */
    private $api;

    /**
     * @var RepeaterInterface
     */
    private $repeater;

    public function __construct(TelegramApiInterface $api, RepeaterInterface $repeater = null)
    {
        $this->api = $api;
        $this->repeater = $repeater ?: new Repeater(
            1000, // 1 second
            1000 * 60 * 5 // 5 minutes
        );
    }

    /**
     * {@inheritdoc}
     */
    public function listen(array $updateHandlers): void
    {
        $this->repeater->repeat(function () use ($updateHandlers) {
            foreach ($this->getUpdates() as $update) {
                foreach ($updateHandlers as $handler) {
                    $handler->handle($update);
                }
            }
        });
    }

    /**
     * @return Update[]
     *
     * @throws \Zored\Telegram\Exception\TelegramApiException
     */
    private function getUpdates(): array
    {
        return $this->api->getUpdates();
    }
}
