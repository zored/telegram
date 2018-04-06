<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\PrivacyRuleInterface;

/**
 * @see https://core.telegram.org/constructor/privacyValueDisallowUsers
 * @codeCoverageIgnore
 */
final class PrivacyValueDisallowUsers implements PrivacyRuleInterface
{
    public const ID = 209668535;

    /** @var IntInterface[] */
    private $users;

    /**
     * @return IntInterface[]
     */
    public function getUsers(): array
    {
        return $this->users;
    }

    public function setUsers(array $users): self
    {
        $this->users = array_map(function (int $users) {
            return new class($users) extends AbstractBaseType implements IntInterface {
            };
        }, $users);

        return $this;
    }
}
