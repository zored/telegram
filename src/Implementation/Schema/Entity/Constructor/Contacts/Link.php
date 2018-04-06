<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor\Contacts;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Contacts\ForeignLinkInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Contacts\LinkInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Contacts\MyLinkInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\UserInterface;

/**
 * @see https://core.telegram.org/constructor/contacts.link
 * @codeCoverageIgnore
 */
final class Link implements LinkInterface
{
    public const ID = -322001931;

    /** @var MyLinkInterface */
    private $my_link;

    /** @var ForeignLinkInterface */
    private $foreign_link;

    /** @var UserInterface */
    private $user;

    /**
     * @return MyLinkInterface
     */
    public function getMyLink(): MyLinkInterface
    {
        return $this->my_link;
    }

    public function setMyLink(MyLinkInterface $my_link): self
    {
        $this->my_link = $my_link;

        return $this;
    }

    /**
     * @return ForeignLinkInterface
     */
    public function getForeignLink(): ForeignLinkInterface
    {
        return $this->foreign_link;
    }

    public function setForeignLink(ForeignLinkInterface $foreign_link): self
    {
        $this->foreign_link = $foreign_link;

        return $this;
    }

    /**
     * @return UserInterface
     */
    public function getUser(): UserInterface
    {
        return $this->user;
    }

    public function setUser(UserInterface $user): self
    {
        $this->user = $user;

        return $this;
    }
}
