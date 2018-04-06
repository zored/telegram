<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputContactInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\LongInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\StringInterface;

/**
 * @see https://core.telegram.org/constructor/inputPhoneContact
 * @codeCoverageIgnore
 */
final class InputPhoneContact implements InputContactInterface
{
    public const ID = -208488460;

    /** @var LongInterface */
    private $client_id;

    /** @var StringInterface */
    private $phone;

    /** @var StringInterface */
    private $first_name;

    /** @var StringInterface */
    private $last_name;

    /**
     * @return LongInterface
     */
    public function getClientId(): LongInterface
    {
        return $this->client_id;
    }

    public function setClientId(int $client_id): self
    {
        $this->client_id = new class($client_id) extends AbstractBaseType implements LongInterface {
        };

        return $this;
    }

    /**
     * @return StringInterface
     */
    public function getPhone(): StringInterface
    {
        return $this->phone;
    }

    public function setPhone(StringInterface $phone): self
    {
        $this->phone = $phone;

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
