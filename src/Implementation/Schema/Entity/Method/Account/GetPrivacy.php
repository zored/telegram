<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Account;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Account\PrivacyRulesInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputPrivacyKeyInterface;

/**
 * @see https://core.telegram.org/method/account.getPrivacy
 * @codeCoverageIgnore
 */
class GetPrivacy
{
    public const ID = -623130288;

    /** @var InputPrivacyKeyInterface */
    private $key;

    /** @var PrivacyRulesInterface */
    private $result;

    /**
     * @return InputPrivacyKeyInterface
     */
    public function getKey(): InputPrivacyKeyInterface
    {
        return $this->key;
    }

    public function setKey(InputPrivacyKeyInterface $key): self
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @return PrivacyRulesInterface
     */
    public function getResult(): PrivacyRulesInterface
    {
        return $this->result;
    }

    public function setResult(PrivacyRulesInterface $result): self
    {
        $this->result = $result;

        return $this;
    }
}
