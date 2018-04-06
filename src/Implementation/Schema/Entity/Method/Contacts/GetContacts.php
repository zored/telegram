<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Contacts;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Contacts\ContactsInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\StringInterface;

/**
 * @see https://core.telegram.org/method/contacts.getContacts
 * @codeCoverageIgnore
 */
class GetContacts
{
    public const ID = 583445000;

    /** @var StringInterface */
    private $hash;

    /** @var ContactsInterface */
    private $result;

    /**
     * @return StringInterface
     */
    public function getHash(): StringInterface
    {
        return $this->hash;
    }

    public function setHash(StringInterface $hash): self
    {
        $this->hash = $hash;

        return $this;
    }

    /**
     * @return ContactsInterface
     */
    public function getResult(): ContactsInterface
    {
        return $this->result;
    }

    public function setResult(ContactsInterface $result): self
    {
        $this->result = $result;

        return $this;
    }
}
