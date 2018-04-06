<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\UserStatusInterface;

/**
 * @see https://core.telegram.org/constructor/userStatusLastWeek
 * @codeCoverageIgnore
 */
final class UserStatusLastWeek implements UserStatusInterface
{
    public const ID = 129960444;
}
