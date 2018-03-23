<?php

declare(strict_types=1);

namespace Zored\Telegram\Entity\Control\Peer;

use Zored\Telegram\Entity\Control\Peer\Exception\PeerFactoryException;
use Zored\Telegram\Entity\General\AbstractEntity;

final class PeerFactory
{
    /**
     * @throws PeerFactoryException
     */
    public static function createByEntity(AbstractEntity $entity): PeerInterface
    {
        if ($entity instanceof \Zored\Telegram\Entity\User) {
            return new User($entity->getId());
        }

        if ($entity instanceof \Zored\Telegram\Entity\Chat) {
            return new Chat($entity->getId());
        }

        throw PeerFactoryException::becauseNoPeerFound($entity);
    }
}
