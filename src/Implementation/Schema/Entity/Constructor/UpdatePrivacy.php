<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\PrivacyKeyInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\PrivacyRuleInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\UpdateInterface;

/**
 * @see https://core.telegram.org/constructor/updatePrivacy
 * @codeCoverageIgnore
 */
final class UpdatePrivacy implements UpdateInterface
{
    public const ID = -298113238;

    /** @var PrivacyKeyInterface */
    private $key;

    /** @var PrivacyRuleInterface[] */
    private $rules;

    /**
     * @return PrivacyKeyInterface
     */
    public function getKey(): PrivacyKeyInterface
    {
        return $this->key;
    }

    public function setKey(PrivacyKeyInterface $key): self
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @return PrivacyRuleInterface[]
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
}
