<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Help;

use Zored\Telegram\Implementation\Schema\Entity\BaseType\AbstractBaseType;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\Help\InviteTextInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\StringInterface;

/**
 * @see https://core.telegram.org/method/help.getInviteText
 * @codeCoverageIgnore
 */
class GetInviteText
{
    public const ID = -1532407418;

    /** @var StringInterface */
    private $lang_code;

    /** @var InviteTextInterface */
    private $result;

    /**
     * @return StringInterface
     */
    public function getLangCode(): StringInterface
    {
        return $this->lang_code;
    }

    public function setLangCode(string $lang_code): self
    {
        $this->lang_code = new class($lang_code) extends AbstractBaseType implements StringInterface {
        };

        return $this;
    }

    /**
     * @return InviteTextInterface
     */
    public function getResult(): InviteTextInterface
    {
        return $this->result;
    }

    public function setResult(InviteTextInterface $result): self
    {
        $this->result = $result;

        return $this;
    }
}
