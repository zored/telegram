<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Contacts;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\BoolInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputUserInterface;

/**
 * @see https://core.telegram.org/method/contacts.deleteContacts
 * @codeCoverageIgnore
 */
class DeleteContacts
{
    public const ID = 1504393374;

    /** @var InputUserInterface[] */
    private $id;

    /** @var BoolInterface */
    private $result;

    /**
     * @return InputUserInterface[]
     */
    public function getId(): array
    {
        return $this->id;
    }

    public function setId(array $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return BoolInterface
     */
    public function getResult(): BoolInterface
    {
        return $this->result;
    }

    public function setResult(BoolInterface $result): self
    {
        $this->result = $result;

        return $this;
    }
}
