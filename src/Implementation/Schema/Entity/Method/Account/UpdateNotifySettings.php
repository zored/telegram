<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Account;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\BoolInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputNotifyPeerInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputPeerNotifySettingsInterface;

/**
 * @see https://core.telegram.org/method/account.updateNotifySettings
 * @codeCoverageIgnore
 */
class UpdateNotifySettings
{
    public const ID = -2067899501;

    /** @var InputNotifyPeerInterface */
    private $peer;

    /** @var InputPeerNotifySettingsInterface */
    private $settings;

    /** @var BoolInterface */
    private $result;

    /**
     * @return InputNotifyPeerInterface
     */
    public function getPeer(): InputNotifyPeerInterface
    {
        return $this->peer;
    }

    public function setPeer(InputNotifyPeerInterface $peer): self
    {
        $this->peer = $peer;

        return $this;
    }

    /**
     * @return InputPeerNotifySettingsInterface
     */
    public function getSettings(): InputPeerNotifySettingsInterface
    {
        return $this->settings;
    }

    public function setSettings(InputPeerNotifySettingsInterface $settings): self
    {
        $this->settings = $settings;

        return $this;
    }

    /**
     * @return BoolInterface
     */
    public function getResult(): BoolInterface
    {
        return $this->result;
    }

    public function setResult(BoolInterface $result): self
    {
        $this->result = $result;

        return $this;
    }
}
