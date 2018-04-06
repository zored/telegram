<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Flags\Unknown5Interface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\PeerSettingsInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Unknown3Interface;

/**
 * @see https://core.telegram.org/constructor/peerSettings
 * @codeCoverageIgnore
 */
final class PeerSettings implements PeerSettingsInterface
{
    public const ID = -2122045747;

    /** @var Unknown3Interface */
    private $flags;

    /** @var Unknown5Interface */
    private $report_spam;

    /**
     * @return Unknown3Interface
     */
    public function getFlags(): Unknown3Interface
    {
        return $this->flags;
    }

    public function setFlags(Unknown3Interface $flags): self
    {
        $this->flags = $flags;

        return $this;
    }

    /**
     * @return Unknown5Interface
     */
    public function getReportSpam(): Unknown5Interface
    {
        return $this->report_spam;
    }

    public function setReportSpam(Unknown5Interface $report_spam): self
    {
        $this->report_spam = $report_spam;

        return $this;
    }
}
