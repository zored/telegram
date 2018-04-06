<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\MessageActionInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\StringInterface;

/**
 * @see https://core.telegram.org/constructor/messageActionChatCreate
 * @codeCoverageIgnore
 */
final class MessageActionChatCreate implements MessageActionInterface
{
    public const ID = -1503425638;

    /** @var StringInterface */
    private $title;

    /** @var IntInterface[] */
    private $users;

    /**
     * @return StringInterface
     */
    public function getTitle(): StringInterface
    {
        return $this->title;
    }

    public function setTitle(StringInterface $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return IntInterface[]
     */
    public function getUsers(): array
    {
        return $this->users;
    }

    public function setUsers(int $users): self
    {
        $this->users = new class($users) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }
}
