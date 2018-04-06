<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\EncryptedChatInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\LongInterface;

/**
 * @see https://core.telegram.org/constructor/encryptedChatWaiting
 * @codeCoverageIgnore
 */
final class EncryptedChatWaiting implements EncryptedChatInterface
{
    public const ID = 1006044124;

    /** @var IntInterface */
    private $id;

    /** @var LongInterface */
    private $access_hash;

    /** @var IntInterface */
    private $date;

    /** @var IntInterface */
    private $admin_id;

    /** @var IntInterface */
    private $participant_id;

    /**
     * @return IntInterface
     */
    public function getId(): IntInterface
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = new class($id) extends AbstractBaseType implements IntInterface {
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
     * @return IntInterface
     */
    public function getAdminId(): IntInterface
    {
        return $this->admin_id;
    }

    public function setAdminId(int $admin_id): self
    {
        $this->admin_id = new class($admin_id) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }

    /**
     * @return IntInterface
     */
    public function getParticipantId(): IntInterface
    {
        return $this->participant_id;
    }

    public function setParticipantId(int $participant_id): self
    {
        $this->participant_id = new class($participant_id) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }
}
