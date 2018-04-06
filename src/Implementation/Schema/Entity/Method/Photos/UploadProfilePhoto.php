<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Photos;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputFileInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputGeoPointInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputPhotoCropInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Photos\PhotoInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\StringInterface;

/**
 * @see https://core.telegram.org/method/photos.uploadProfilePhoto
 * @codeCoverageIgnore
 */
class UploadProfilePhoto
{
    public const ID = -720397176;

    /** @var InputFileInterface */
    private $file;

    /** @var StringInterface */
    private $caption;

    /** @var InputGeoPointInterface */
    private $geo_point;

    /** @var InputPhotoCropInterface */
    private $crop;

    /** @var PhotoInterface */
    private $result;

    /**
     * @return InputFileInterface
     */
    public function getFile(): InputFileInterface
    {
        return $this->file;
    }

    public function setFile(InputFileInterface $file): self
    {
        $this->file = $file;

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
     * @return InputGeoPointInterface
     */
    public function getGeoPoint(): InputGeoPointInterface
    {
        return $this->geo_point;
    }

    public function setGeoPoint(InputGeoPointInterface $geo_point): self
    {
        $this->geo_point = $geo_point;

        return $this;
    }

    /**
     * @return InputPhotoCropInterface
     */
    public function getCrop(): InputPhotoCropInterface
    {
        return $this->crop;
    }

    public function setCrop(InputPhotoCropInterface $crop): self
    {
        $this->crop = $crop;

        return $this;
    }

    /**
     * @return PhotoInterface
     */
    public function getResult(): PhotoInterface
    {
        return $this->result;
    }

    public function setResult(PhotoInterface $result): self
    {
        $this->result = $result;

        return $this;
    }
}
