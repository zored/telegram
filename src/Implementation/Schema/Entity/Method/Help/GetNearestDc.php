<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Help;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\NearestDcInterface;

/**
 * @see https://core.telegram.org/method/help.getNearestDc
 * @codeCoverageIgnore
 */
class GetNearestDc
{
    public const ID = 531836966;

    /** @var NearestDcInterface */
    private $result;

    /**
     * @return NearestDcInterface
     */
    public function getResult(): NearestDcInterface
    {
        return $this->result;
    }

    public function setResult(NearestDcInterface $result): self
    {
        $this->result = $result;

        return $this;
    }
}
