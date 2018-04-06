<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Auth;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Auth\AuthorizationInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\BytesInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;

/**
 * @see https://core.telegram.org/method/auth.importAuthorization
 * @codeCoverageIgnore
 */
class ImportAuthorization
{
    public const ID = -470837741;

    /** @var IntInterface */
    private $id;

    /** @var BytesInterface */
    private $bytes;

    /** @var AuthorizationInterface */
    private $result;

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
     * @return BytesInterface
     */
    public function getBytes(): BytesInterface
    {
        return $this->bytes;
    }

    public function setBytes(BytesInterface $bytes): self
    {
        $this->bytes = $bytes;

        return $this;
    }

    /**
     * @return AuthorizationInterface
     */
    public function getResult(): AuthorizationInterface
    {
        return $this->result;
    }

    public function setResult(AuthorizationInterface $result): self
    {
        $this->result = $result;

        return $this;
    }
}
