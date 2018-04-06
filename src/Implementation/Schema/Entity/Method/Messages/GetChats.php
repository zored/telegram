<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Messages;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Messages\ChatsInterface;

/**
 * @see https://core.telegram.org/method/messages.getChats
 * @codeCoverageIgnore
 */
class GetChats
{
    public const ID = 1013621127;

    /** @var IntInterface[] */
    private $id;

    /** @var ChatsInterface */
    private $result;

    /**
     * @return IntInterface[]
     */
    public function getId(): array
    {
        return $this->id;
    }

    public function setId(array $id): self
    {
        $this->id = array_map(function (int $id) {
            return new class($id) extends AbstractBaseType implements IntInterface {
            };
        }, $id);

        return $this;
    }

    /**
     * @return ChatsInterface
     */
    public function getResult(): ChatsInterface
    {
        return $this->result;
    }

    public function setResult(ChatsInterface $result): self
    {
        $this->result = $result;

        return $this;
    }
}
