<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\PrivacyRuleInterface;

/**
 * @see https://core.telegram.org/constructor/privacyValueDisallowContacts
 * @codeCoverageIgnore
 */
final class PrivacyValueDisallowContacts implements PrivacyRuleInterface
{
    public const ID = -125240806;
}
