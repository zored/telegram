<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Messages;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;

/**
 * @see https://core.telegram.org/method/messages.deleteMessages
 * @codeCoverageIgnore
 */
class DeleteMessages
{
    public const ID = 351460618;

    /** @var IntInterface[] */
    private $id;

    /** @var IntInterface[] */
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
     * @return IntInterface[]
     */
    public function getResult(): array
    {
        return $this->result;
    }

    public function setResult(int $result): self
    {
        $this->result = new class($result) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }
}
