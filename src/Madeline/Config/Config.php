<?php

namespace Zored\Telegram\Madeline\Config;

use JMS\Serializer\Annotation as Serializer;

final class Config
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
    private $logLevel = LogLevel::ECHO;

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
     * @var string
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
    private $session;

    public function __construct(
        int $id,
        string $hash,
        string $phone,
        string $session = 'default-session',
        string $botToken = null
    ) {
        $this->id = $id;
        $this->hash = $hash;
        $this->phone = $phone;
        $this->botToken = $botToken;
        $this->session = $session;
    }

    public function setLogLevel(int $logLevel): void
    {
        $this->logLevel = $logLevel;
    }

    public function setAuthExpiresInSeconds(int $authExpiresInSeconds): void
    {
        $this->authExpiresInSeconds = $authExpiresInSeconds;
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

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function getBotToken(): ?string
    {
        return $this->botToken;
    }

    public function getSession(): string
    {
        return $this->session;
    }

    public function setSession(string $session): void
    {
        $this->session = $session;
    }
}
