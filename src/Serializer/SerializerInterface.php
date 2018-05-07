<?php

declare(strict_types=1);

namespace Zored\Telegram\Serializer;

interface SerializerInterface
{
    public const FORMAT_ARRAY = 'array';

    /**
     * @return object
     */
    public function deserialize(string $class, $data, string $format = self::FORMAT_ARRAY);

    public function serialize($object): array;
}
