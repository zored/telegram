<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Updates;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Updates\StateInterface;

/**
 * @see https://core.telegram.org/method/updates.getState
 * @codeCoverageIgnore
 */
class GetState
{
    public const ID = -304838614;

    /** @var StateInterface */
    private $result;

    /**
     * @return StateInterface
     */
    public function getResult(): StateInterface
    {
        return $this->result;
    }

    public function setResult(StateInterface $result): self
    {
        $this->result = $result;

        return $this;
    }
}
