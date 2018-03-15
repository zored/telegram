<?php

namespace Zored\Telegram\Madeline\Config;

use Zored\Telegram\Madeline\Config\Auth\AuthConfigInterface;

interface ConfigInterface
{
    public function setLogLevel(int $logLevel): self;

    public function setAuthExpiresInSeconds(int $authExpiresInSeconds): self;

    public function setSessionPath(string $sessionPath): self;

    public function getId(): int;

    public function getHash(): string;

    public function getLogLevel(): int;

    public function getAuthExpiresInSeconds(): int;

    public function getPhone(): ?string;

    public function getBotToken(): ?string;

    public function getSessionPath(): string;

    public function getAuth(): AuthConfigInterface;
}
