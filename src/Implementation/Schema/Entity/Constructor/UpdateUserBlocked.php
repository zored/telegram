<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\BoolInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\UpdateInterface;

/**
 * @see https://core.telegram.org/constructor/updateUserBlocked
 * @codeCoverageIgnore
 */
final class UpdateUserBlocked implements UpdateInterface
{
    public const ID = -2131957734;

    /** @var IntInterface */
    private $user_id;

    /** @var BoolInterface */
    private $blocked;

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
     * @return BoolInterface
     */
    public function getBlocked(): BoolInterface
    {
        return $this->blocked;
    }

    public function setBlocked(BoolInterface $blocked): self
    {
        $this->blocked = $blocked;

        return $this;
    }
}
