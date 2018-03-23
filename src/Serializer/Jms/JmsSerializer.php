<?php

declare(strict_types=1);

namespace Zored\Telegram\Serializer\Jms;

use JMS\Serializer\Naming\CamelCaseNamingStrategy;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface;
use Zored\Telegram\Serializer\Jms\Exception\JmsSerializerException;
use Zored\Telegram\Serializer\Jms\Visitor\ArrayDeserializationVisitor;
use Zored\Telegram\Serializer\Jms\Visitor\ArraySerializationVisitor;
use function is_object;

final class JmsSerializer implements \Zored\Telegram\Serializer\SerializerInterface
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
     * {@inheritdoc}
     */
    public function deserialize(string $class, array $data)
    {
        $result = $this->serializer->deserialize($data, $class, self::FORMAT_ARRAY);
        if (!is_object($result)) {
            throw JmsSerializerException::becauseNotObjectReturned($result);
        }

        return $result;
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
