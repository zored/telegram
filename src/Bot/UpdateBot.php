<?php

namespace Zored\Telegram\Bot;

use Zored\Telegram\Bot\Update\UpdateHandlerInterface;
use Zored\Telegram\Entity\Bot\Update;
use Zored\Telegram\TelegramApi;
use Zored\Telegram\TelegramApiInterface;
use Zored\Telegram\Util\Repeater\RepeaterInterface;

final class UpdateBot implements BotInterface
{
    /**
     * @var TelegramApiInterface
     */
    private $api;

    /**
     * @var RepeaterInterface
     */
    private $repeater;

    public function __construct(TelegramApiInterface $api, RepeaterInterface $repeater)
    {
        $this->api = $api;
        $this->repeater = $repeater;
    }

    /**
     * {@inheritDoc}
     * @param UpdateHandlerInterface[] $updateHandlers
     */
    public function listen(array $updateHandlers): void
    {
        $this->repeater->repeat(function() use ($updateHandlers) {
            foreach ($this->getUpdates() as $update) {
                foreach ($updateHandlers as $handler) {
                    $handler->handle($update);
                }
            }
        });
    }

    /**
     * @return Update[]
     */
    protected function getUpdates(): array
    {
        return $this->api->getUpdates(50);
    }
}
