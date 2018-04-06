<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor\Help;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\BoolInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Help\AppUpdateInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\StringInterface;

/**
 * @see https://core.telegram.org/constructor/help.appUpdate
 * @codeCoverageIgnore
 */
final class AppUpdate implements AppUpdateInterface
{
    public const ID = -1987579119;

    /** @var IntInterface */
    private $id;

    /** @var BoolInterface */
    private $critical;

    /** @var StringInterface */
    private $url;

    /** @var StringInterface */
    private $text;

    /**
     * @return IntInterface
     */
    public function getId(): IntInterface
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
     * @return BoolInterface
     */
    public function getCritical(): BoolInterface
    {
        return $this->critical;
    }

    public function setCritical(BoolInterface $critical): self
    {
        $this->critical = $critical;

        return $this;
    }

    /**
     * @return StringInterface
     */
    public function getUrl(): StringInterface
    {
        return $this->url;
    }

    public function setUrl(StringInterface $url): self
    {
        $this->url = $url;

        return $this;
    }

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
