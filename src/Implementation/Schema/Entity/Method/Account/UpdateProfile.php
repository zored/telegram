<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Account;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\StringInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\UserInterface;

/**
 * @see https://core.telegram.org/method/account.updateProfile
 * @codeCoverageIgnore
 */
class UpdateProfile
{
    public const ID = -259486360;

    /** @var StringInterface */
    private $first_name;

    /** @var StringInterface */
    private $last_name;

    /** @var UserInterface */
    private $result;

    /**
     * @return StringInterface
     */
    public function getFirstName(): StringInterface
    {
        return $this->first_name;
    }

    public function setFirstName(StringInterface $first_name): self
    {
        $this->first_name = $first_name;

        return $this;
    }

    /**
     * @return StringInterface
     */
    public function getLastName(): StringInterface
    {
        return $this->last_name;
    }

    public function setLastName(StringInterface $last_name): self
    {
        $this->last_name = $last_name;

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
