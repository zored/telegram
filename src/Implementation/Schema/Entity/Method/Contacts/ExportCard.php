<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Contacts;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;

/**
 * @see https://core.telegram.org/method/contacts.exportCard
 * @codeCoverageIgnore
 */
class ExportCard
{
    public const ID = -2065352905;

    /** @var IntInterface[] */
    private $result;

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
