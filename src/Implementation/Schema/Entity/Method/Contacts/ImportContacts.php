<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Contacts;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\BoolInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Contacts\ImportedContactsInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputContactInterface;

/**
 * @see https://core.telegram.org/method/contacts.importContacts
 * @codeCoverageIgnore
 */
class ImportContacts
{
    public const ID = -634342611;

    /** @var InputContactInterface[] */
    private $contacts;

    /** @var BoolInterface */
    private $replace;

    /** @var ImportedContactsInterface */
    private $result;

    /**
     * @return InputContactInterface[]
     */
    public function getContacts(): array
    {
        return $this->contacts;
    }

    public function setContacts(array $contacts): self
    {
        $this->contacts = $contacts;

        return $this;
    }

    /**
     * @return BoolInterface
     */
    public function getReplace(): BoolInterface
    {
        return $this->replace;
    }

    public function setReplace(BoolInterface $replace): self
    {
        $this->replace = $replace;

        return $this;
    }

    /**
     * @return ImportedContactsInterface
     */
    public function getResult(): ImportedContactsInterface
    {
        return $this->result;
    }

    public function setResult(ImportedContactsInterface $result): self
    {
        $this->result = $result;

        return $this;
    }
}
