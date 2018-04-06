<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor\Auth;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Auth\CheckedPhoneInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\BoolInterface;

/**
 * @see https://core.telegram.org/constructor/auth.checkedPhone
 * @codeCoverageIgnore
 */
final class CheckedPhone implements CheckedPhoneInterface
{
    public const ID = -486486981;

    /** @var BoolInterface */
    private $phone_registered;

    /** @var BoolInterface */
    private $phone_invited;

    /**
     * @return BoolInterface
     */
    public function getPhoneRegistered(): BoolInterface
    {
        return $this->phone_registered;
    }

    public function setPhoneRegistered(BoolInterface $phone_registered): self
    {
        $this->phone_registered = $phone_registered;

        return $this;
    }

    /**
     * @return BoolInterface
     */
    public function getPhoneInvited(): BoolInterface
    {
        return $this->phone_invited;
    }

    public function setPhoneInvited(BoolInterface $phone_invited): self
    {
        $this->phone_invited = $phone_invited;

        return $this;
    }
}
