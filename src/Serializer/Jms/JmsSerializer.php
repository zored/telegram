<?php

declare(strict_types=1);

namespace Zored\Telegram\Serializer\Jms;

use JMS\Serializer\Naming\CamelCaseNamingStrategy;
use JMS\Serializer\Naming\SerializedNameAnnotationStrategy;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface;
use Zored\Telegram\Serializer\Jms\Exception\JmsSerializerException;
use Zored\Telegram\Serializer\Jms\Visitor\ArrayDeserializationVisitor;
use Zored\Telegram\Serializer\Jms\Visitor\ArraySerializationVisitor;
use function is_object;

class JmsSerializer implements \Zored\Telegram\Serializer\SerializerInterface
{
    public const FORMAT_ARRAY = 'array';

    /**
     * @var SerializerInterface
     */
    private $serializer;

    /**
     * @var string[]
     */
    private $classMap;

    /**
     * @param string[] $classMap
     *
     * @throws JmsSerializerException
     */
    public function __construct(SerializerInterface $serializer = null, array $classMap = [])
    {
        $this->serializer = $serializer ?? $this->createDefaultSerializer();
        $this->classMap = $classMap;
        $this->assertClassMap();
    }

    /**
     * {@inheritdoc}
     */
    public function deserialize(string $class, array $data)
    {
        $class = $this->classMap[$class] ?? $class;
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
        $namingStrategy = new SerializedNameAnnotationStrategy(new CamelCaseNamingStrategy());

        $builder->setDeserializationVisitor(self::FORMAT_ARRAY, new ArrayDeserializationVisitor($namingStrategy));
        $builder->setSerializationVisitor(self::FORMAT_ARRAY, new ArraySerializationVisitor($namingStrategy));

        return $builder->build();
    }

    /**
     * @throws JmsSerializerException
     */
    private function assertClassMap(): void
    {
        foreach ($this->classMap as $before => $after) {
            if (is_subclass_of($after, $before)) {
                continue;
            }
            throw JmsSerializerException::becauseOfWrongMapping($before, $after);
        }
    }
}
