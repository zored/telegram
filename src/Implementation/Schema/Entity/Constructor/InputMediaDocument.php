<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputDocumentInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputMediaInterface;

/**
 * @see https://core.telegram.org/constructor/inputMediaDocument
 * @codeCoverageIgnore
 */
final class InputMediaDocument implements InputMediaInterface
{
    public const ID = -779818943;

    /** @var InputDocumentInterface */
    private $id;

    /**
     * @return InputDocumentInterface
     */
    public function getId(): InputDocumentInterface
    {
        return $this->id;
    }

    public function setId(InputDocumentInterface $id): self
    {
        $this->id = $id;

        return $this;
    }
}
