<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\PrivacyRuleInterface;

/**
 * @see https://core.telegram.org/constructor/privacyValueAllowContacts
 * @codeCoverageIgnore
 */
final class PrivacyValueAllowContacts implements PrivacyRuleInterface
{
    public const ID = -123988;
}
