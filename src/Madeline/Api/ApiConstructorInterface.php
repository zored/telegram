<?php

declare(strict_types=1);

namespace Zored\Telegram\Madeline\Api;

use danog\MadelineProto\API;

interface ApiConstructorInterface
{
    public function create(): API;
}
