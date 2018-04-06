<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Method\Account;

use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Schema\Entity\Type\WallPaperInterface;

/**
 * @see https://core.telegram.org/method/account.getWallPapers
 * @codeCoverageIgnore
 */
class GetWallPapers
{
    public const ID = -1068696894;

    /** @var WallPaperInterface[] */
    private $result;

    /**
     * @return WallPaperInterface[]
     */
    public function getResult(): array
    {
        return $this->result;
    }

    public function setResult(array $result): self
    {
        $this->result = $result;

        return $this;
    }
}
