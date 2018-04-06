<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\DocumentInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\MessageMediaInterface;

/**
 * @see https://core.telegram.org/constructor/messageMediaDocument
 * @codeCoverageIgnore
 */
final class MessageMediaDocument implements MessageMediaInterface
{
    public const ID = 802824708;

    /** @var DocumentInterface */
    private $document;

    /**
     * @return DocumentInterface
     */
    public function getDocument(): DocumentInterface
    {
        return $this->document;
    }

    public function setDocument(DocumentInterface $document): self
    {
        $this->document = $document;

        return $this;
    }
}
