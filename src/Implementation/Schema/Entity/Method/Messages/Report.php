<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Messages;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\BoolInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputPeerInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\ReportReasonInterface;

/**
 * @see https://core.telegram.org/method/messages.report
 * @codeCoverageIgnore
 */
class Report
{
    public const ID = -1115507112;

    /** @var InputPeerInterface */
    private $peer;

    /** @var IntInterface[] */
    private $id;

    /** @var ReportReasonInterface */
    private $reason;

    /** @var BoolInterface */
    private $result;

    /**
     * @return InputPeerInterface
     */
    public function getPeer(): InputPeerInterface
    {
        return $this->peer;
    }

    public function setPeer(InputPeerInterface $peer): self
    {
        $this->peer = $peer;

        return $this;
    }

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
     * @return ReportReasonInterface
     */
    public function getReason(): ReportReasonInterface
    {
        return $this->reason;
    }

    public function setReason(ReportReasonInterface $reason): self
    {
        $this->reason = $reason;

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
