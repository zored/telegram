<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Help;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\ConfigInterface;

/**
 * @see https://core.telegram.org/method/help.getConfig
 * @codeCoverageIgnore
 */
class GetConfig
{
    public const ID = -990308245;

    /** @var ConfigInterface */
    private $result;

    /**
     * @return ConfigInterface
     */
    public function getResult(): ConfigInterface
    {
        return $this->result;
    }

    public function setResult(ConfigInterface $result): self
    {
        $this->result = $result;

        return $this;
    }
}
