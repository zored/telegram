<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Messages;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Messages\AllStickersInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\StringInterface;

/**
 * @see https://core.telegram.org/method/messages.getAllStickers
 * @codeCoverageIgnore
 */
class GetAllStickers
{
    public const ID = -1438922648;

    /** @var StringInterface */
    private $hash;

    /** @var AllStickersInterface */
    private $result;

    /**
     * @return StringInterface
     */
    public function getHash(): StringInterface
    {
        return $this->hash;
    }

    public function setHash(string $hash): self
    {
        $this->hash = new class($hash) extends AbstractBaseType implements StringInterface {
        };

        return $this;
    }

    /**
     * @return AllStickersInterface
     */
    public function getResult(): AllStickersInterface
    {
        return $this->result;
    }

    public function setResult(AllStickersInterface $result): self
    {
        $this->result = $result;

        return $this;
    }
}
