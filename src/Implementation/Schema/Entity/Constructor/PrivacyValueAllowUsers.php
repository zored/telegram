<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\PrivacyRuleInterface;

/**
 * @see https://core.telegram.org/constructor/privacyValueAllowUsers
 * @codeCoverageIgnore
 */
final class PrivacyValueAllowUsers implements PrivacyRuleInterface
{
    public const ID = 1297858060;

    /** @var IntInterface[] */
    private $users;

    /**
     * @return IntInterface[]
     */
    public function getUsers(): array
    {
        return $this->users;
    }

    public function setUsers(int $users): self
    {
        $this->users = new class($users) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }
}
