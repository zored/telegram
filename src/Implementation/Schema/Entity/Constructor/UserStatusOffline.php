<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\UserStatusInterface;

/**
 * @see https://core.telegram.org/constructor/userStatusOffline
 * @codeCoverageIgnore
 */
final class UserStatusOffline implements UserStatusInterface
{
    public const ID = 9203775;

    /** @var IntInterface */
    private $was_online;

    /**
     * @return IntInterface
     */
    public function getWasOnline(): IntInterface
    {
        return $this->was_online;
    }

    public function setWasOnline(int $was_online): self
    {
        $this->was_online = new class($was_online) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }
}
