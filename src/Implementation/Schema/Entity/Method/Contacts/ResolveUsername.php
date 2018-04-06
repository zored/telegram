<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Contacts;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\StringInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\UserInterface;

/**
 * @see https://core.telegram.org/method/contacts.resolveUsername
 * @codeCoverageIgnore
 */
class ResolveUsername
{
    public const ID = 200282908;

    /** @var StringInterface */
    private $username;

    /** @var UserInterface */
    private $result;

    /**
     * @return StringInterface
     */
    public function getUsername(): StringInterface
    {
        return $this->username;
    }

    public function setUsername(StringInterface $username): self
    {
        $this->username = $username;

        return $this;
    }

    /**
     * @return UserInterface
     */
    public function getResult(): UserInterface
    {
        return $this->result;
    }

    public function setResult(UserInterface $result): self
    {
        $this->result = $result;

        return $this;
    }
}
