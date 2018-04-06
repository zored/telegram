<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\MessageMediaInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\VideoInterface;

/**
 * @see https://core.telegram.org/constructor/messageMediaVideo
 * @codeCoverageIgnore
 */
final class MessageMediaVideo implements MessageMediaInterface
{
    public const ID = -1563278704;

    /** @var VideoInterface */
    private $video;

    /**
     * @return VideoInterface
     */
    public function getVideo(): VideoInterface
    {
        return $this->video;
    }

    public function setVideo(VideoInterface $video): self
    {
        $this->video = $video;

        return $this;
    }
}
