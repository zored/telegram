<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor\Contacts;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Contacts\ImportedContactsInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\ImportedContactInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\LongInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\UserInterface;

/**
 * @see https://core.telegram.org/constructor/contacts.importedContacts
 * @codeCoverageIgnore
 */
final class ImportedContacts implements ImportedContactsInterface
{
    public const ID = -1387117803;

    /** @var ImportedContactInterface[] */
    private $imported;

    /** @var LongInterface[] */
    private $retry_contacts;

    /** @var UserInterface[] */
    private $users;

    /**
     * @return ImportedContactInterface[]
     */
    public function getImported(): array
    {
        return $this->imported;
    }

    public function setImported(array $imported): self
    {
        $this->imported = $imported;

        return $this;
    }

    /**
     * @return LongInterface[]
     */
    public function getRetryContacts(): array
    {
        return $this->retry_contacts;
    }

    public function setRetryContacts(int $retry_contacts): self
    {
        $this->retry_contacts = new class($retry_contacts) extends AbstractBaseType implements LongInterface {
        };

        return $this;
    }

    /**
     * @return UserInterface[]
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
