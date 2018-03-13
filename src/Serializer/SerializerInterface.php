<?php

namespace Zored\Telegram\Serializer;

interface SerializerInterface
{
    /**
     * @return object
     */
    public function deserialize(string $class, array $data);

    public function serialize($object): array;
}
