<?php

declare(strict_types=1);

namespace Zored\Telegram\Serializer\Jms;

use JMS\Serializer\SerializerInterface;
use PHPUnit\Framework\TestCase;

final class JmsSerializerTest extends TestCase
{
    /**
     * @var JmsSerializer
     */
    private $serializer;

    private $delegate;

    /**
     * @expectedException \Zored\Telegram\Serializer\Jms\Exception\JmsSerializerException
     */
    public function testDeserialize(): void
    {
        $this->delegate
            ->expects($this->once())
            ->method('deserialize')
            ->with(
                [],
                'a',
                JmsSerializer::FORMAT_ARRAY
            )
            ->willReturn('not object');
        $this->serializer->deserialize('a', []);
    }

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        $this->serializer = new JmsSerializer(
            $this->delegate = $this->createMock(SerializerInterface::class)
        );
    }
}
