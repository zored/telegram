<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor\Contacts;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\BoolInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Contacts\MyLinkInterface;

/**
 * @see https://core.telegram.org/constructor/contacts.myLinkRequested
 * @codeCoverageIgnore
 */
final class MyLinkRequested implements MyLinkInterface
{
    public const ID = 1818882030;

    /** @var BoolInterface */
    private $contact;

    /**
     * @return BoolInterface
     */
    public function getContact(): BoolInterface
    {
        return $this->contact;
    }

    public function setContact(BoolInterface $contact): self
    {
        $this->contact = $contact;

        return $this;
    }
}
