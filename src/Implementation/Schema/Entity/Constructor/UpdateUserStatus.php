<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\UpdateInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\UserStatusInterface;

/**
 * @see https://core.telegram.org/constructor/updateUserStatus
 * @codeCoverageIgnore
 */
final class UpdateUserStatus implements UpdateInterface
{
    public const ID = 469489699;

    /** @var IntInterface */
    private $user_id;

    /** @var UserStatusInterface */
    private $status;

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
     * @return UserStatusInterface
     */
    public function getStatus(): UserStatusInterface
    {
        return $this->status;
    }

    public function setStatus(UserStatusInterface $status): self
    {
        $this->status = $status;

        return $this;
    }
}
