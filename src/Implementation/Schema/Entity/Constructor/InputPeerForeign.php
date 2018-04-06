<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputPeerInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\LongInterface;

/**
 * @see https://core.telegram.org/constructor/inputPeerForeign
 * @codeCoverageIgnore
 */
final class InputPeerForeign implements InputPeerInterface
{
    public const ID = -1690012891;

    /** @var IntInterface */
    private $user_id;

    /** @var LongInterface */
    private $access_hash;

    /**
     * @return IntInterface
     */
    public function getUserId(): IntInterface
    {
        return $this->user_id;
    }

    public function setUserId(int $user_id): self
    {
        $this->user_id = new class($user_id) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }

    /**
     * @return LongInterface
     */
    public function getAccessHash(): LongInterface
    {
        return $this->access_hash;
    }

    public function setAccessHash(int $access_hash): self
    {
        $this->access_hash = new class($access_hash) extends AbstractBaseType implements LongInterface {
        };

        return $this;
    }
}
