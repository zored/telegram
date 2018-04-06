<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\SendMessageActionInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\UpdateInterface;

/**
 * @see https://core.telegram.org/constructor/updateUserTyping
 * @codeCoverageIgnore
 */
final class UpdateUserTyping implements UpdateInterface
{
    public const ID = 1548249383;

    /** @var IntInterface */
    private $user_id;

    /** @var SendMessageActionInterface */
    private $action;

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

    /**
     * @return SendMessageActionInterface
     */
    public function getAction(): SendMessageActionInterface
    {
        return $this->action;
    }

    public function setAction(SendMessageActionInterface $action): self
    {
        $this->action = $action;

        return $this;
    }
}
