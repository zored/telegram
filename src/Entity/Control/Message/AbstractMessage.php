<?php

declare(strict_types=1);

namespace Zored\Telegram\Entity\Control\Message;

abstract class AbstractMessage implements MessageInterface
{
    /**
     * @var string
     */
    private $content;

    /**
     * @var bool
     */
    private $isLinkPreview;

    public function __construct(string $content, bool $isLinkPreview = false)
    {
        $this->content = $content;
        $this->isLinkPreview = $isLinkPreview;
    }

    /**
     * {@inheritdoc}
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * {@inheritdoc}
     */
    public function isLinkPreview(): bool
    {
        return $this->isLinkPreview;
    }
}
