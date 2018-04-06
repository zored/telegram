<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\GeoPointInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\LongInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\PhotoInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\PhotoSizeInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\StringInterface;

/**
 * @see https://core.telegram.org/constructor/photo
 * @codeCoverageIgnore
 */
final class Photo implements PhotoInterface
{
    public const ID = 582313809;

    /** @var LongInterface */
    private $id;

    /** @var LongInterface */
    private $access_hash;

    /** @var IntInterface */
    private $user_id;

    /** @var IntInterface */
    private $date;

    /** @var StringInterface */
    private $caption;

    /** @var GeoPointInterface */
    private $geo;

    /** @var PhotoSizeInterface[] */
    private $sizes;

    /**
     * @return LongInterface
     */
    public function getId(): LongInterface
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = new class($id) extends AbstractBaseType implements LongInterface {
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
     * @return IntInterface
     */
    public function getDate(): IntInterface
    {
        return $this->date;
    }

    public function setDate(int $date): self
    {
        $this->date = new class($date) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }

    /**
     * @return StringInterface
     */
    public function getCaption(): StringInterface
    {
        return $this->caption;
    }

    public function setCaption(string $caption): self
    {
        $this->caption = new class($caption) extends AbstractBaseType implements StringInterface {
        };

        return $this;
    }

    /**
     * @return GeoPointInterface
     */
    public function getGeo(): GeoPointInterface
    {
        return $this->geo;
    }

    public function setGeo(GeoPointInterface $geo): self
    {
        $this->geo = $geo;

        return $this;
    }

    /**
     * @return PhotoSizeInterface[]
     */
    public function getSizes(): array
    {
        return $this->sizes;
    }

    public function setSizes(array $sizes): self
    {
        $this->sizes = $sizes;

        return $this;
    }
}
