<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\ImportedContactInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\LongInterface;

/**
 * @see https://core.telegram.org/constructor/importedContact
 * @codeCoverageIgnore
 */
final class ImportedContact implements ImportedContactInterface
{
    public const ID = -805141448;

    /** @var IntInterface */
    private $user_id;

    /** @var LongInterface */
    private $client_id;

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
    public function getClientId(): LongInterface
    {
        return $this->client_id;
    }

    public function setClientId(int $client_id): self
    {
        $this->client_id = new class($client_id) extends AbstractBaseType implements LongInterface {
        };

        return $this;
    }
}
