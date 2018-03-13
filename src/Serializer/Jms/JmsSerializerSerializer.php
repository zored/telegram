<?php

namespace Zored\Telegram\Serializer\Jms;

use JMS\Serializer\Naming\CamelCaseNamingStrategy;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface;
use Zored\Telegram\Serializer\Jms\Visitor\ArrayDeserializationVisitor;
use Zored\Telegram\Serializer\Jms\Visitor\ArraySerializationVisitor;

final class JmsSerializerSerializer implements \Zored\Telegram\Serializer\SerializerInterface
{
    public const FORMAT_ARRAY = 'array';

    /**
     * @var SerializerInterface
     */
    private $serializer;

    public function __construct(SerializerInterface $serializer = null)
    {
        $this->serializer = $serializer ?? $this->createDefaultSerializer();
    }

    /**
     * {@inheritDoc}
     */
    public function deserialize(string $class, array $data)
    {
        return $this->serializer->deserialize($data, $class, self::FORMAT_ARRAY);
    }

    public function serialize($object): array
    {
        return (array) $this->serializer->serialize($object, self::FORMAT_ARRAY);
    }


    private function createDefaultSerializer(): SerializerInterface
    {
        $builder = SerializerBuilder::create();

        $builder->addDefaultDeserializationVisitors();
        $builder->addDefaultSerializationVisitors();
        $namingStrategy = new CamelCaseNamingStrategy();
        $builder->setDeserializationVisitor(self::FORMAT_ARRAY, new ArrayDeserializationVisitor($namingStrategy));
        $builder->setSerializationVisitor(self::FORMAT_ARRAY, new ArraySerializationVisitor($namingStrategy));

        return $builder->build();
    }

}
