<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputAudioInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputMediaInterface;

/**
 * @see https://core.telegram.org/constructor/inputMediaAudio
 * @codeCoverageIgnore
 */
final class InputMediaAudio implements InputMediaInterface
{
    public const ID = -1986820223;

    /** @var InputAudioInterface */
    private $id;

    /**
     * @return InputAudioInterface
     */
    public function getId(): InputAudioInterface
    {
        return $this->id;
    }

    public function setId(InputAudioInterface $id): self
    {
        $this->id = $id;

        return $this;
    }
}
