<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputPrivacyRuleInterface;

/**
 * @see https://core.telegram.org/constructor/inputPrivacyValueDisallowAll
 * @codeCoverageIgnore
 */
final class InputPrivacyValueDisallowAll implements InputPrivacyRuleInterface
{
    public const ID = -697604407;
}
