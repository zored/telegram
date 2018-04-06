<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Contacts;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\ContactStatusInterface;

/**
 * @see https://core.telegram.org/method/contacts.getStatuses
 * @codeCoverageIgnore
 */
class GetStatuses
{
    public const ID = -995929106;

    /** @var ContactStatusInterface[] */
    private $result;

    /**
     * @return ContactStatusInterface[]
     */
    public function getResult(): array
    {
        return $this->result;
    }

    public function setResult(array $result): self
    {
        $this->result = $result;

        return $this;
    }
}
