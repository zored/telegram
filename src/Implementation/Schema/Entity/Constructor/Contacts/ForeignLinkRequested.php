<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor\Contacts;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\BoolInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Contacts\ForeignLinkInterface;

/**
 * @see https://core.telegram.org/constructor/contacts.foreignLinkRequested
 * @codeCoverageIgnore
 */
final class ForeignLinkRequested implements ForeignLinkInterface
{
    public const ID = -1484775609;

    /** @var BoolInterface */
    private $has_phone;

    /**
     * @return BoolInterface
     */
    public function getHasPhone(): BoolInterface
    {
        return $this->has_phone;
    }

    public function setHasPhone(BoolInterface $has_phone): self
    {
        $this->has_phone = $has_phone;

        return $this;
    }
}
