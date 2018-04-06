<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputUserInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;

/**
 * @see https://core.telegram.org/constructor/inputUserContact
 * @codeCoverageIgnore
 */
final class InputUserContact implements InputUserInterface
{
    public const ID = -2031530139;

    /** @var IntInterface */
    private $user_id;

    /**
     * @return IntInterface
     */
    public function getUserId(): IntInterface
    {
        return $this->user_id;
    }

    public function setUserId(int $user_id): self
    {
        $this->user_id = new class($user_id) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }
}
