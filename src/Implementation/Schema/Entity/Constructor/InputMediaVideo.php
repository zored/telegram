<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputMediaInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputVideoInterface;

/**
 * @see https://core.telegram.org/constructor/inputMediaVideo
 * @codeCoverageIgnore
 */
final class InputMediaVideo implements InputMediaInterface
{
    public const ID = 2130852582;

    /** @var InputVideoInterface */
    private $id;

    /**
     * @return InputVideoInterface
     */
    public function getId(): InputVideoInterface
    {
        return $this->id;
    }

    public function setId(InputVideoInterface $id): self
    {
        $this->id = $id;

        return $this;
    }
}
