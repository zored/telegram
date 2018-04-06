<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\MessageActionInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\StringInterface;

/**
 * @see https://core.telegram.org/constructor/messageActionChatEditTitle
 * @codeCoverageIgnore
 */
final class MessageActionChatEditTitle implements MessageActionInterface
{
    public const ID = -1247687078;

    /** @var StringInterface */
    private $title;

    /**
     * @return StringInterface
     */
    public function getTitle(): StringInterface
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = new class($title) extends AbstractBaseType implements StringInterface {
        };

        return $this;
    }
}
