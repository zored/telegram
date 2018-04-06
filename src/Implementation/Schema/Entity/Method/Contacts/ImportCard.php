<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Contacts;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\UserInterface;

/**
 * @see https://core.telegram.org/method/contacts.importCard
 * @codeCoverageIgnore
 */
class ImportCard
{
    public const ID = 1340184318;

    /** @var IntInterface[] */
    private $export_card;

    /** @var UserInterface */
    private $result;

    /**
     * @return IntInterface[]
     */
    public function getExportCard(): array
    {
        return $this->export_card;
    }

    public function setExportCard(array $export_card): self
    {
        $this->export_card = array_map(function (int $export_card) {
            return new class($export_card) extends AbstractBaseType implements IntInterface {
            };
        }, $export_card);

        return $this;
    }

    /**
     * @return UserInterface
     */
    public function getResult(): UserInterface
    {
        return $this->result;
    }

    public function setResult(UserInterface $result): self
    {
        $this->result = $result;

        return $this;
    }
}
