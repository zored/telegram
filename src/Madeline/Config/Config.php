<?php

namespace Zored\Telegram\Madeline\Config;

use JMS\Serializer\Annotation as Serializer;
use Zored\Telegram\Madeline\Config\Auth\AuthConfigInterface;

final class Config implements ConfigInterface
{
    /**
     * @Serializer\Type("integer")
     *
     * @var int
     */
    private $id;

    /**
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $hash;

    /**
     * @Serializer\Type("integer")
     *
     * @var int
     */
    private $logLevel = LogLevel::NONE;

    /**
     * @Serializer\Type("integer")
     * Default: one day.
     *
     * @var int
     */
    private $authExpiresInSeconds = 86400;

    /**
     * @Serializer\Type("string")
     *
     * @var string|null
     */
    private $phone;

    /**
     * @Serializer\Type("botToken")
     *
     * @var null|string
     */
    private $botToken;

    /**
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $sessionPath;

    /**
     * @var AuthConfigInterface
     */
    private $auth;

    public function __construct(
        int $id,
        string $hash,
        AuthConfigInterface $auth,
        string $sessionPath
    ) {
        $this->id = $id;
        $this->hash = $hash;
        $this->sessionPath = $sessionPath;
        $this->auth = $auth;
    }

    public function setLogLevel(int $logLevel): ConfigInterface
    {
        $this->logLevel = $logLevel;

        return $this;
    }

    public function setAuthExpiresInSeconds(int $authExpiresInSeconds): ConfigInterface
    {
        $this->authExpiresInSeconds = $authExpiresInSeconds;

        return $this;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getHash(): string
    {
        return $this->hash;
    }

    public function getLogLevel(): int
    {
        return $this->logLevel;
    }

    public function getAuthExpiresInSeconds(): int
    {
        return $this->authExpiresInSeconds;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function getBotToken(): ?string
    {
        return $this->botToken;
    }

    public function getSessionPath(): string
    {
        return $this->sessionPath;
    }

    public function setSessionPath(string $sessionPath): ConfigInterface
    {
        $this->sessionPath = $sessionPath;

        return $this;
    }

    public function getAuth(): AuthConfigInterface
    {
        return $this->auth;
    }
}
