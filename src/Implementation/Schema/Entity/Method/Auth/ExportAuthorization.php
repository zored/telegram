<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Auth;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Auth\ExportedAuthorizationInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\IntInterface;

/**
 * @see https://core.telegram.org/method/auth.exportAuthorization
 * @codeCoverageIgnore
 */
class ExportAuthorization
{
    public const ID = -440401971;

    /** @var IntInterface */
    private $dc_id;

    /** @var ExportedAuthorizationInterface */
    private $result;

    /**
     * @return IntInterface
     */
    public function getDcId(): IntInterface
    {
        return $this->dc_id;
    }

    public function setDcId(int $dc_id): self
    {
        $this->dc_id = new class($dc_id) extends AbstractBaseType implements IntInterface {
        };

        return $this;
    }

    /**
     * @return ExportedAuthorizationInterface
     */
    public function getResult(): ExportedAuthorizationInterface
    {
        return $this->result;
    }

    public function setResult(ExportedAuthorizationInterface $result): self
    {
        $this->result = $result;

        return $this;
    }
}
