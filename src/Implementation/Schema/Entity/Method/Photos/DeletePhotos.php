<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Photos;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputPhotoInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\LongInterface;

/**
 * @see https://core.telegram.org/method/photos.deletePhotos
 * @codeCoverageIgnore
 */
class DeletePhotos
{
    public const ID = -2016444625;

    /** @var InputPhotoInterface[] */
    private $id;

    /** @var LongInterface[] */
    private $result;

    /**
     * @return InputPhotoInterface[]
     */
    public function getId(): array
    {
        return $this->id;
    }

    public function setId(array $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return LongInterface[]
     */
    public function getResult(): array
    {
        return $this->result;
    }

    public function setResult(array $result): self
    {
        $this->result = array_map(function (int $result) {
            return new class($result) extends AbstractBaseType implements LongInterface {
            };
        }, $result);

        return $this;
    }
}
