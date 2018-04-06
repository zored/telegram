<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Messages;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Messages\DhConfigInterface;

/**
 * @see https://core.telegram.org/method/messages.getDhConfig
 * @codeCoverageIgnore
 */
class GetDhConfig
{
    public const ID = 651135312;

    /** @var IntInterface */
    private $version;

    /** @var IntInterface */
    private $random_length;

    /** @var DhConfigInterface */
    private $result;

    /**
     * @return IntInterface
     */
    public function getVersion(): IntInterface
    {
        return $this->version;
    }

    public function setVersion(int $version): self
    {
        $this->version = new class($version) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }

    /**
     * @return IntInterface
     */
    public function getRandomLength(): IntInterface
    {
        return $this->random_length;
    }

    public function setRandomLength(int $random_length): self
    {
        $this->random_length = new class($random_length) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }

    /**
     * @return DhConfigInterface
     */
    public function getResult(): DhConfigInterface
    {
        return $this->result;
    }

    public function setResult(DhConfigInterface $result): self
    {
        $this->result = $result;

        return $this;
    }
}
