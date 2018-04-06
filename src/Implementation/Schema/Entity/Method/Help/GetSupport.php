<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Help;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Help\SupportInterface;

/**
 * @see https://core.telegram.org/method/help.getSupport
 * @codeCoverageIgnore
 */
class GetSupport
{
    public const ID = -1663104819;

    /** @var SupportInterface */
    private $result;

    /**
     * @return SupportInterface
     */
    public function getResult(): SupportInterface
    {
        return $this->result;
    }

    public function setResult(SupportInterface $result): self
    {
        $this->result = $result;

        return $this;
    }
}
