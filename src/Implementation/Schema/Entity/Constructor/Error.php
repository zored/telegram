<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\ErrorInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\StringInterface;

/**
 * @see https://core.telegram.org/constructor/error
 * @codeCoverageIgnore
 */
final class Error implements ErrorInterface
{
    public const ID = -994444869;

    /** @var IntInterface */
    private $code;

    /** @var StringInterface */
    private $text;

    /**
     * @return IntInterface
     */
    public function getCode(): IntInterface
    {
        return $this->code;
    }

    public function setCode(int $code): self
    {
        $this->code = new class($code) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }

    /**
     * @return StringInterface
     */
    public function getText(): StringInterface
    {
        return $this->text;
    }

    public function setText(string $text): self
    {
        $this->text = new class($text) extends AbstractBaseType implements StringInterface {
        };

        return $this;
    }
}
