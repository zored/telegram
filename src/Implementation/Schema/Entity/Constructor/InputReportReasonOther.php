<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\ReportReasonInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\StringInterface;

/**
 * @see https://core.telegram.org/constructor/inputReportReasonOther
 * @codeCoverageIgnore
 */
final class InputReportReasonOther implements ReportReasonInterface
{
    public const ID = -512463606;

    /** @var StringInterface */
    private $text;

    /**
     * @return StringInterface
     */
    public function getText(): StringInterface
    {
        return $this->text;
    }

    public function setText(StringInterface $text): self
    {
        $this->text = $text;

        return $this;
    }
}
