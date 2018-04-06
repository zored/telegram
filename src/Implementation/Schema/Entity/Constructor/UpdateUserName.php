<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\StringInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\UpdateInterface;

/**
 * @see https://core.telegram.org/constructor/updateUserName
 * @codeCoverageIgnore
 */
final class UpdateUserName implements UpdateInterface
{
    public const ID = -1489818765;

    /** @var IntInterface */
    private $user_id;

    /** @var StringInterface */
    private $first_name;

    /** @var StringInterface */
    private $last_name;

    /** @var StringInterface */
    private $username;

    /**
     * @return IntInterface
     */
    public function getUserId(): IntInterface
    {
        return $this->user_id;
    }

    public function setUserId(int $user_id): self
    {
        $this->user_id = new class($user_id) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }

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
}
