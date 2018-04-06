<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputPrivacyRuleInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputUserInterface;

/**
 * @see https://core.telegram.org/constructor/inputPrivacyValueAllowUsers
 * @codeCoverageIgnore
 */
final class InputPrivacyValueAllowUsers implements InputPrivacyRuleInterface
{
    public const ID = 320652927;

    /** @var InputUserInterface[] */
    private $users;

    /**
     * @return InputUserInterface[]
     */
    public function getUsers(): array
    {
        return $this->users;
    }

    public function setUsers(array $users): self
    {
        $this->users = $users;

        return $this;
    }
}
