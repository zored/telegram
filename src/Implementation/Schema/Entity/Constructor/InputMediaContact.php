<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputMediaInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\StringInterface;

/**
 * @see https://core.telegram.org/constructor/inputMediaContact
 * @codeCoverageIgnore
 */
final class InputMediaContact implements InputMediaInterface
{
    public const ID = -1494984313;

    /** @var StringInterface */
    private $phone_number;

    /** @var StringInterface */
    private $first_name;

    /** @var StringInterface */
    private $last_name;

    /**
     * @return StringInterface
     */
    public function getPhoneNumber(): StringInterface
    {
        return $this->phone_number;
    }

    public function setPhoneNumber(StringInterface $phone_number): self
    {
        $this->phone_number = $phone_number;

        return $this;
    }

    /**
     * @return StringInterface
     */
    public function getFirstName(): StringInterface
    {
        return $this->first_name;
    }

    public function setFirstName(StringInterface $first_name): self
    {
        $this->first_name = $first_name;

        return $this;
    }

    /**
     * @return StringInterface
     */
    public function getLastName(): StringInterface
    {
        return $this->last_name;
    }

    public function setLastName(StringInterface $last_name): self
    {
        $this->last_name = $last_name;

        return $this;
    }
}
