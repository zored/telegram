<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Account;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\BoolInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\StringInterface;

/**
 * @see https://core.telegram.org/method/account.unregisterDevice
 * @codeCoverageIgnore
 */
class UnregisterDevice
{
    public const ID = 1707432768;

    /** @var IntInterface */
    private $token_type;

    /** @var StringInterface */
    private $token;

    /** @var BoolInterface */
    private $result;

    /**
     * @return IntInterface
     */
    public function getTokenType(): IntInterface
    {
        return $this->token_type;
    }

    public function setTokenType(int $token_type): self
    {
        $this->token_type = new class($token_type) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }

    /**
     * @return StringInterface
     */
    public function getToken(): StringInterface
    {
        return $this->token;
    }

    public function setToken(StringInterface $token): self
    {
        $this->token = $token;

        return $this;
    }

    /**
     * @return BoolInterface
     */
    public function getResult(): BoolInterface
    {
        return $this->result;
    }

    public function setResult(BoolInterface $result): self
    {
        $this->result = $result;

        return $this;
    }
}
