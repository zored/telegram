<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Contacts;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\BoolInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputUserInterface;

/**
 * @see https://core.telegram.org/method/contacts.block
 * @codeCoverageIgnore
 */
class Block
{
    public const ID = 858475004;

    /** @var InputUserInterface */
    private $id;

    /** @var BoolInterface */
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
