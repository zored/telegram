<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Messages;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Messages\MessagesInterface;

/**
 * @see https://core.telegram.org/method/messages.getMessages
 * @codeCoverageIgnore
 */
class GetMessages
{
    public const ID = 1109588596;

    /** @var IntInterface[] */
    private $id;

    /** @var MessagesInterface */
    private $result;

    /**
     * @return IntInterface[]
     */
    public function getId(): array
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = new class($id) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }

    /**
     * @return MessagesInterface
     */
    public function getResult(): MessagesInterface
    {
        return $this->result;
    }

    public function setResult(MessagesInterface $result): self
    {
        $this->result = $result;

        return $this;
    }
}
