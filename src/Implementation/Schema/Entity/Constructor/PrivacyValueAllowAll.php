<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\PrivacyRuleInterface;

/**
 * @see https://core.telegram.org/constructor/privacyValueAllowAll
 * @codeCoverageIgnore
 */
final class PrivacyValueAllowAll implements PrivacyRuleInterface
{
    public const ID = 1698855810;
}
