<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Contacts;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Contacts\LinkInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputUserInterface;

/**
 * @see https://core.telegram.org/method/contacts.deleteContact
 * @codeCoverageIgnore
 */
class DeleteContact
{
    public const ID = -1902823612;

    /** @var InputUserInterface */
    private $id;

    /** @var LinkInterface */
    private $result;

    /**
     * @return InputUserInterface
     */
    public function getId(): InputUserInterface
    {
        return $this->id;
    }

    public function setId(InputUserInterface $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return LinkInterface
     */
    public function getResult(): LinkInterface
    {
        return $this->result;
    }

    public function setResult(LinkInterface $result): self
    {
        $this->result = $result;

        return $this;
    }
}
