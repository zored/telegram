<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor\Auth;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Auth\AuthorizationInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\UserInterface;

/**
 * @see https://core.telegram.org/constructor/auth.authorization
 * @codeCoverageIgnore
 */
final class Authorization implements AuthorizationInterface
{
    public const ID = -155815004;

    /** @var IntInterface */
    private $expires;

    /** @var UserInterface */
    private $user;

    /**
     * @return IntInterface
     */
    public function getExpires(): IntInterface
    {
        return $this->expires;
    }

    public function setExpires(int $expires): self
    {
        $this->expires = new class($expires) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }

    /**
     * @return UserInterface
     */
    public function getUser(): UserInterface
    {
        return $this->user;
    }

    public function setUser(UserInterface $user): self
    {
        $this->user = $user;

        return $this;
    }
}
