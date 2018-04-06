<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\FileLocationInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\LongInterface;

/**
 * @see https://core.telegram.org/constructor/fileLocation
 * @codeCoverageIgnore
 */
final class FileLocation implements FileLocationInterface
{
    public const ID = 1406570614;

    /** @var IntInterface */
    private $dc_id;

    /** @var LongInterface */
    private $volume_id;

    /** @var IntInterface */
    private $local_id;

    /** @var LongInterface */
    private $secret;

    /**
     * @return IntInterface
     */
    public function getDcId(): IntInterface
    {
        return $this->dc_id;
    }

    public function setDcId(int $dc_id): self
    {
        $this->dc_id = new class($dc_id) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }

    /**
     * @return LongInterface
     */
    public function getVolumeId(): LongInterface
    {
        return $this->volume_id;
    }

    public function setVolumeId(int $volume_id): self
    {
        $this->volume_id = new class($volume_id) extends AbstractBaseType implements LongInterface {
        };

        return $this;
    }

    /**
     * @return IntInterface
     */
    public function getLocalId(): IntInterface
    {
        return $this->local_id;
    }

    public function setLocalId(int $local_id): self
    {
        $this->local_id = new class($local_id) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }

    /**
     * @return LongInterface
     */
    public function getSecret(): LongInterface
    {
        return $this->secret;
    }

    public function setSecret(int $secret): self
    {
        $this->secret = new class($secret) extends AbstractBaseType implements LongInterface {
        };

        return $this;
    }
}
