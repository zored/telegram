<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Messages;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Messages\StickersInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\StringInterface;

/**
 * @see https://core.telegram.org/method/messages.getStickers
 * @codeCoverageIgnore
 */
class GetStickers
{
    public const ID = -1373446075;

    /** @var StringInterface */
    private $emoticon;

    /** @var StringInterface */
    private $hash;

    /** @var StickersInterface */
    private $result;

    /**
     * @return StringInterface
     */
    public function getEmoticon(): StringInterface
    {
        return $this->emoticon;
    }

    public function setEmoticon(string $emoticon): self
    {
        $this->emoticon = new class($emoticon) extends AbstractBaseType implements StringInterface {
        };

        return $this;
    }

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
     * @return StickersInterface
     */
    public function getResult(): StickersInterface
    {
        return $this->result;
    }

    public function setResult(StickersInterface $result): self
    {
        $this->result = $result;

        return $this;
    }
}
