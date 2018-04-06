<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\UserStatusInterface;

/**
 * @see https://core.telegram.org/constructor/userStatusOnline
 * @codeCoverageIgnore
 */
final class UserStatusOnline implements UserStatusInterface
{
    public const ID = -306628279;

    /** @var IntInterface */
    private $expires;

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
}
