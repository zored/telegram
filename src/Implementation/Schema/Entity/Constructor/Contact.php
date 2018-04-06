<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\BoolInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\ContactInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;

/**
 * @see https://core.telegram.org/constructor/contact
 * @codeCoverageIgnore
 */
final class Contact implements ContactInterface
{
    public const ID = -116274796;

    /** @var IntInterface */
    private $user_id;

    /** @var BoolInterface */
    private $mutual;

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
     * @return BoolInterface
     */
    public function getMutual(): BoolInterface
    {
        return $this->mutual;
    }

    public function setMutual(BoolInterface $mutual): self
    {
        $this->mutual = $mutual;

        return $this;
    }
}
