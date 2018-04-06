<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\AudioInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\MessageMediaInterface;

/**
 * @see https://core.telegram.org/constructor/messageMediaAudio
 * @codeCoverageIgnore
 */
final class MessageMediaAudio implements MessageMediaInterface
{
    public const ID = -961117440;

    /** @var AudioInterface */
    private $audio;

    /**
     * @return AudioInterface
     */
    public function getAudio(): AudioInterface
    {
        return $this->audio;
    }

    public function setAudio(AudioInterface $audio): self
    {
        $this->audio = $audio;

        return $this;
    }
}
