<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\UserStatusInterface;

/**
 * @see https://core.telegram.org/constructor/userStatusEmpty
 * @codeCoverageIgnore
 */
final class UserStatusEmpty implements UserStatusInterface
{
    public const ID = 164646985;
}