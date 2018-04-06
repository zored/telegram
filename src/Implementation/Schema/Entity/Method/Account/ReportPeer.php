<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Account;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\BoolInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputPeerInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\ReportReasonInterface;

/**
 * @see https://core.telegram.org/method/account.reportPeer
 * @codeCoverageIgnore
 */
class ReportPeer
{
    public const ID = -1374118561;

    /** @var InputPeerInterface */
    private $peer;

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
