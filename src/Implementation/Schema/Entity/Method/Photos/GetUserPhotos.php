<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Photos;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputUserInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Photos\PhotosInterface;

/**
 * @see https://core.telegram.org/method/photos.getUserPhotos
 * @codeCoverageIgnore
 */
class GetUserPhotos
{
    public const ID = -1209117380;

    /** @var InputUserInterface */
    private $user_id;

    /** @var IntInterface */
    private $offset;

    /** @var IntInterface */
    private $max_id;

    /** @var IntInterface */
    private $limit;

    /** @var PhotosInterface */
    private $result;

    /**
     * @return InputUserInterface
     */
    public function getUserId(): InputUserInterface
    {
        return $this->user_id;
    }

    public function setUserId(InputUserInterface $user_id): self
    {
        $this->user_id = $user_id;

        return $this;
    }

    /**
     * @return IntInterface
     */
    public function getOffset(): IntInterface
    {
        return $this->offset;
    }

    public function setOffset(int $offset): self
    {
        $this->offset = new class($offset) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }

    /**
     * @return IntInterface
     */
    public function getMaxId(): IntInterface
    {
        return $this->max_id;
    }

    public function setMaxId(int $max_id): self
    {
        $this->max_id = new class($max_id) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }

    /**
     * @return IntInterface
     */
    public function getLimit(): IntInterface
    {
        return $this->limit;
    }

    public function setLimit(int $limit): self
    {
        $this->limit = new class($limit) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }

    /**
     * @return PhotosInterface
     */
    public function getResult(): PhotosInterface
    {
        return $this->result;
    }

    public function setResult(PhotosInterface $result): self
    {
        $this->result = $result;

        return $this;
    }
}
