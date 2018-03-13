<?php

namespace Zored\Telegram\Madeline\Api;

use danog\MadelineProto\API;

interface ApiConstructorInterface
{
    public function create(): API;
}
