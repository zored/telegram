<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\LongInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\PhotoSizeInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\StringInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\VideoInterface;

/**
 * @see https://core.telegram.org/constructor/video
 * @codeCoverageIgnore
 */
final class Video implements VideoInterface
{
    public const ID = 948937617;

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

    /** @var IntInterface */
    private $duration;

    /** @var StringInterface */
    private $mime_type;

    /** @var IntInterface */
    private $size;

    /** @var PhotoSizeInterface */
    private $thumb;

    /** @var IntInterface */
    private $dc_id;

    /** @var IntInterface */
    private $w;

    /** @var IntInterface */
    private $h;

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
     * @return IntInterface
     */
    public function getDuration(): IntInterface
    {
        return $this->duration;
    }

    public function setDuration(int $duration): self
    {
        $this->duration = new class($duration) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }

    /**
     * @return StringInterface
     */
    public function getMimeType(): StringInterface
    {
        return $this->mime_type;
    }

    public function setMimeType(string $mime_type): self
    {
        $this->mime_type = new class($mime_type) extends AbstractBaseType implements StringInterface {
        };

        return $this;
    }

    /**
     * @return IntInterface
     */
    public function getSize(): IntInterface
    {
        return $this->size;
    }

    public function setSize(int $size): self
    {
        $this->size = new class($size) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }

    /**
     * @return PhotoSizeInterface
     */
    public function getThumb(): PhotoSizeInterface
    {
        return $this->thumb;
    }

    public function setThumb(PhotoSizeInterface $thumb): self
    {
        $this->thumb = $thumb;

        return $this;
    }

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
     * @return IntInterface
     */
    public function getW(): IntInterface
    {
        return $this->w;
    }

    public function setW(int $w): self
    {
        $this->w = new class($w) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }

    /**
     * @return IntInterface
     */
    public function getH(): IntInterface
    {
        return $this->h;
    }

    public function setH(int $h): self
    {
        $this->h = new class($h) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }
}
