<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Constructor;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\BoolInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\ConfigInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\DcOptionInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\DisabledFeatureInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;

/**
 * @see https://core.telegram.org/constructor/config
 * @codeCoverageIgnore
 */
final class Config implements ConfigInterface
{
    public const ID = 2108568544;

    /** @var IntInterface */
    private $date;

    /** @var IntInterface */
    private $expires;

    /** @var BoolInterface */
    private $test_mode;

    /** @var IntInterface */
    private $this_dc;

    /** @var DcOptionInterface[] */
    private $dc_options;

    /** @var IntInterface */
    private $chat_big_size;

    /** @var IntInterface */
    private $chat_size_max;

    /** @var IntInterface */
    private $broadcast_size_max;

    /** @var DisabledFeatureInterface[] */
    private $disabled_features;

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
    public function getExpires(): IntInterface
    {
        return $this->expires;
    }

    public function setExpires(int $expires): self
    {
        $this->expires = new class($expires) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }

    /**
     * @return BoolInterface
     */
    public function getTestMode(): BoolInterface
    {
        return $this->test_mode;
    }

    public function setTestMode(BoolInterface $test_mode): self
    {
        $this->test_mode = $test_mode;

        return $this;
    }

    /**
     * @return IntInterface
     */
    public function getThisDc(): IntInterface
    {
        return $this->this_dc;
    }

    public function setThisDc(int $this_dc): self
    {
        $this->this_dc = new class($this_dc) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }

    /**
     * @return DcOptionInterface[]
     */
    public function getDcOptions(): array
    {
        return $this->dc_options;
    }

    public function setDcOptions(array $dc_options): self
    {
        $this->dc_options = $dc_options;

        return $this;
    }

    /**
     * @return IntInterface
     */
    public function getChatBigSize(): IntInterface
    {
        return $this->chat_big_size;
    }

    public function setChatBigSize(int $chat_big_size): self
    {
        $this->chat_big_size = new class($chat_big_size) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }

    /**
     * @return IntInterface
     */
    public function getChatSizeMax(): IntInterface
    {
        return $this->chat_size_max;
    }

    public function setChatSizeMax(int $chat_size_max): self
    {
        $this->chat_size_max = new class($chat_size_max) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }

    /**
     * @return IntInterface
     */
    public function getBroadcastSizeMax(): IntInterface
    {
        return $this->broadcast_size_max;
    }

    public function setBroadcastSizeMax(int $broadcast_size_max): self
    {
        $this->broadcast_size_max = new class($broadcast_size_max) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }

    /**
     * @return DisabledFeatureInterface[]
     */
    public function getDisabledFeatures(): array
    {
        return $this->disabled_features;
    }

    public function setDisabledFeatures(array $disabled_features): self
    {
        $this->disabled_features = $disabled_features;

        return $this;
    }
}
