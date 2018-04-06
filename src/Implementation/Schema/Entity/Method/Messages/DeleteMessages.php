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

    public function setId(array $id): self
    {
        $this->id = array_map(function (int $id) {
            return new class($id) extends AbstractBaseType implements IntInterface {
            };
        }, $id);

        return $this;
    }

    /**
     * @return IntInterface[]
     */
    public function getResult(): array
    {
        return $this->result;
    }

    public function setResult(array $result): self
    {
        $this->result = array_map(function (int $result) {
            return new class($result) extends AbstractBaseType implements IntInterface {
            };
        }, $result);

        return $this;
    }
}
