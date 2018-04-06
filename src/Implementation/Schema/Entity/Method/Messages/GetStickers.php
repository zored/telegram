<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Messages;

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

    public function setEmoticon(StringInterface $emoticon): self
    {
        $this->emoticon = $emoticon;

        return $this;
    }

    /**
     * @return StringInterface
     */
    public function getHash(): StringInterface
    {
        return $this->hash;
    }

    public function setHash(StringInterface $hash): self
    {
        $this->hash = $hash;

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
