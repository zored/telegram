<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\DcOptionInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\UpdateInterface;

/**
 * @see https://core.telegram.org/constructor/updateDcOptions
 * @codeCoverageIgnore
 */
final class UpdateDcOptions implements UpdateInterface
{
    public const ID = -1906403213;

    /** @var DcOptionInterface[] */
    private $dc_options;

    /**
     * @return DcOptionInterface[]
     */
    public function getDcOptions(): array
    {
        return $this->dc_options;
    }

    public function setDcOptions(array $dc_options): self
    {
        $this->dc_options = $dc_options;

        return $this;
    }
}
