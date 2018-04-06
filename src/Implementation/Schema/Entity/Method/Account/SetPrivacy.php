<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Account;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Account\PrivacyRulesInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputPrivacyKeyInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\InputPrivacyRuleInterface;

/**
 * @see https://core.telegram.org/method/account.setPrivacy
 * @codeCoverageIgnore
 */
class SetPrivacy
{
    public const ID = -906486552;

    /** @var InputPrivacyKeyInterface */
    private $key;

    /** @var InputPrivacyRuleInterface[] */
    private $rules;

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
     * @return InputPrivacyRuleInterface[]
     */
    public function getRules(): array
    {
        return $this->rules;
    }

    public function setRules(array $rules): self
    {
        $this->rules = $rules;

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
