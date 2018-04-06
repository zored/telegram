<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\StringInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\UpdateInterface;

/**
 * @see https://core.telegram.org/constructor/updateUserPhone
 * @codeCoverageIgnore
 */
final class UpdateUserPhone implements UpdateInterface
{
    public const ID = 314130811;

    /** @var IntInterface */
    private $user_id;

    /** @var StringInterface */
    private $phone;

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
    public function getPhone(): StringInterface
    {
        return $this->phone;
    }

    public function setPhone(string $phone): self
    {
        $this->phone = new class($phone) extends AbstractBaseType implements StringInterface {
        };

        return $this;
    }
}
