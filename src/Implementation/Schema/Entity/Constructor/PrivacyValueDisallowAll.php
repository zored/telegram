<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\PrivacyRuleInterface;

/**
 * @see https://core.telegram.org/constructor/privacyValueDisallowAll
 * @codeCoverageIgnore
 */
final class PrivacyValueDisallowAll implements PrivacyRuleInterface
{
    public const ID = -1955338397;
}
