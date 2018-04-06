<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Contacts\ForeignLinkInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Contacts\MyLinkInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\UpdateInterface;

/**
 * @see https://core.telegram.org/constructor/updateContactLink
 * @codeCoverageIgnore
 */
final class UpdateContactLink implements UpdateInterface
{
    public const ID = 1369737882;

    /** @var IntInterface */
    private $user_id;

    /** @var MyLinkInterface */
    private $my_link;

    /** @var ForeignLinkInterface */
    private $foreign_link;

    /**
     * @return IntInterface
     */
    public function getUserId(): IntInterface
    {
        return $this->user_id;
    }

    public function setUserId(int $user_id): self
    {
        $this->user_id = new class($user_id) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }

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
}
