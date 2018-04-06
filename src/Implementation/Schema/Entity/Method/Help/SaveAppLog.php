<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Help;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\BoolInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputAppEventInterface;

/**
 * @see https://core.telegram.org/method/help.saveAppLog
 * @codeCoverageIgnore
 */
class SaveAppLog
{
    public const ID = 1862465352;

    /** @var InputAppEventInterface[] */
    private $events;

    /** @var BoolInterface */
    private $result;

    /**
     * @return InputAppEventInterface[]
     */
    public function getEvents(): array
    {
        return $this->events;
    }

    public function setEvents(array $events): self
    {
        $this->events = $events;

        return $this;
    }

    /**
     * @return BoolInterface
     */
    public function getResult(): BoolInterface
    {
        return $this->result;
    }

    public function setResult(BoolInterface $result): self
    {
        $this->result = $result;

        return $this;
    }
}
