<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Users;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputUserInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\UserFullInterface;

/**
 * @see https://core.telegram.org/method/users.getFullUser
 * @codeCoverageIgnore
 */
class GetFullUser
{
    public const ID = -902781519;

    /** @var InputUserInterface */
    private $id;

    /** @var UserFullInterface */
    private $result;

    /**
     * @return InputUserInterface
     */
    public function getId(): InputUserInterface
    {
        return $this->id;
    }

    public function setId(InputUserInterface $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return UserFullInterface
     */
    public function getResult(): UserFullInterface
    {
        return $this->result;
    }

    public function setResult(UserFullInterface $result): self
    {
        $this->result = $result;

        return $this;
    }
}
