<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Messages;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputUserInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Messages\StatedMessageInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\StringInterface;

/**
 * @see https://core.telegram.org/method/messages.createChat
 * @codeCoverageIgnore
 */
class CreateChat
{
    public const ID = 1100847854;

    /** @var InputUserInterface[] */
    private $users;

    /** @var StringInterface */
    private $title;

    /** @var StatedMessageInterface */
    private $result;

    /**
     * @return InputUserInterface[]
     */
    public function getUsers(): array
    {
        return $this->users;
    }

    public function setUsers(array $users): self
    {
        $this->users = $users;

        return $this;
    }

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
     * @return StatedMessageInterface
     */
    public function getResult(): StatedMessageInterface
    {
        return $this->result;
    }

    public function setResult(StatedMessageInterface $result): self
    {
        $this->result = $result;

        return $this;
    }
}
