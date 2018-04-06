<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\UpdateInterface;

/**
 * @see https://core.telegram.org/constructor/updateDeleteMessages
 * @codeCoverageIgnore
 */
final class UpdateDeleteMessages implements UpdateInterface
{
    public const ID = -1456734682;

    /** @var IntInterface[] */
    private $messages;

    /** @var IntInterface */
    private $pts;

    /**
     * @return IntInterface[]
     */
    public function getMessages(): array
    {
        return $this->messages;
    }

    public function setMessages(int $messages): self
    {
        $this->messages = new class($messages) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }

    /**
     * @return IntInterface
     */
    public function getPts(): IntInterface
    {
        return $this->pts;
    }

    public function setPts(int $pts): self
    {
        $this->pts = new class($pts) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }
}