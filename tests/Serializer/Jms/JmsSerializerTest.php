<?php

declare(strict_types=1);

namespace Zored\Telegram\Serializer\Jms;

use JMS\Serializer\SerializerInterface;
use PHPUnit\Framework\TestCase;
use Zored\Telegram\Entity\General\AbstractEntity;
use Zored\Telegram\Entity\User;
use Zored\Telegram\Serializer\Jms\Exception\JmsSerializerException;

class JmsSerializerTest extends TestCase
{
    private const MAP_FROM = AbstractEntity::class;
    private const MAP_TO = User::class;

    /**
     * @var JmsSerializer
     */
    private $serializer;

    private $delegate;

    /**
     * @expectedException \Zored\Telegram\Serializer\Jms\Exception\JmsSerializerException
     * @dataProvider dataDeserializer
     */
    public function testDeserialize(string $from, string $to): void
    {
        $this->delegate
            ->expects($this->once())
            ->method('deserialize')
            ->with(
                [],
                $to,
                JmsSerializer::FORMAT_ARRAY
            )
            ->willReturn('not object');
        $this->serializer->deserialize($from, []);
    }

    public function dataDeserializer(): array
    {
        return [
            [self::MAP_FROM, self::MAP_TO],
            ['a', 'a'],
        ];
    }

    public function testWrongClassMap(): void
    {
        $this->expectException(JmsSerializerException::class);
        $this->expectExceptionMessage('RuntimeException class should extend DateTime');
        new JmsSerializer($this->delegate, [\DateTime::class => \RuntimeException::class]);
    }

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        $this->serializer = new JmsSerializer(
            $this->delegate = $this->createMock(SerializerInterface::class),
            [self::MAP_FROM => self::MAP_TO]
        );
    }
}
