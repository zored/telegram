<?php

declare(strict_types=1);

namespace Zored\Telegram\Serializer;

interface SerializerInterface
{
    /**
     * @return object
     */
    public function deserialize(string $class, array $data);

    public function serialize($object): array;
}
