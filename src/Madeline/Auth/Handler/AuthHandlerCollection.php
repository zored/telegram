<?php

namespace Zored\Telegram\Madeline\Auth\Handler;

use Zored\Telegram\Madeline\Auth\Handler\Exception\AuthHandlerException;
use Zored\Telegram\Madeline\Config\Auth\AuthConfigInterface;
use Zored\Telegram\Util\Collection\ConditionMatch;

final class AuthHandlerCollection implements AuthHandlerCollectionInterface
{
    /**
     * @var array|AuthHandlerInterface[]
     */
    private $handlers;

    /**
     * @param AuthHandlerInterface[] $handlers
     */
    public function __construct(array $handlers)
    {
        $this->handlers = $handlers;
    }

    /**
     * {@inheritdoc}
     */
    public function get(AuthConfigInterface $config): AuthHandlerInterface
    {
        $handler = (new ConditionMatch($this->handlers))->find(
            function (AuthHandlerInterface $currentHandler) use ($config) {
                return $currentHandler->suits($config);
            }
        );

        if (!$handler instanceof AuthHandlerInterface) {
            throw AuthHandlerException::becauseHandlerNotFound();
        }

        return $handler;
    }
}
