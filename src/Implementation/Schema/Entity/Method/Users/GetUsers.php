<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Users;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputUserInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\UserInterface;

/**
 * @see https://core.telegram.org/method/users.getUsers
 * @codeCoverageIgnore
 */
class GetUsers
{
    public const ID = 227648840;

    /** @var InputUserInterface[] */
    private $id;

    /** @var UserInterface[] */
    private $result;

    /**
     * @return InputUserInterface[]
     */
    public function getId(): array
    {
        return $this->id;
    }

    public function setId(array $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return UserInterface[]
     */
    public function getResult(): array
    {
        return $this->result;
    }

    public function setResult(array $result): self
    {
        $this->result = $result;

        return $this;
    }
}
