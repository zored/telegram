<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator;

use Zored\Telegram\Implementation\Schema\Entity\AbstractEntity;
use Zored\Telegram\Implementation\Schema\Generator\Entity\EntityBuilder;
use Zored\Telegram\Implementation\Schema\Generator\Entity\EntityBuilderInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\EntitySaver;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\EntitySaverInterface;
use Zored\Telegram\Implementation\Schema\Schema;
use Zored\Telegram\Serializer\Jms\JmsSerializer;
use Zored\Telegram\Serializer\SerializerInterface;

/**
 * Convert Telegram entities into PHP and save them into files.
 */
final class SchemaGenerator
{
    /**
     * @var string
     */
    private $jsonSchemaPath;

    /**
     * @var EntityBuilderInterface
     */
    private $entityBuilder;

    /**
     * @var EntitySaver
     */
    private $entitySaver;

    /**
     * @var SerializerInterface
     */
    private $serializer;

    public function __construct(
        string $jsonSchemaPath = 'https://core.telegram.org/schema/json',
        SerializerInterface $serializer = null,
        EntityBuilderInterface $entityBuilder = null,
        EntitySaverInterface $entitySaver = null
    ) {
        $this->jsonSchemaPath = $jsonSchemaPath;
        $this->entityBuilder = $entityBuilder ?? new EntityBuilder();
        $this->entitySaver = $entitySaver ?? new EntitySaver();
        $this->serializer = $serializer ?? new JmsSerializer();
    }

    public function generate(): void
    {
        $constructors = $this->getSchema()->getConstructors();
        $entities = $this->entityBuilder->build($constructors);
        array_walk($entities, [$this, 'save']);
    }

    private function save(AbstractEntity $entity): void
    {
        $this->entitySaver->save($entity);
    }

    private function getSchema(): Schema
    {
        $data = json_decode(file_get_contents($this->jsonSchemaPath), true);
        /** @var Schema $schema */
        $schema = $this->serializer->deserialize(Schema::class, $data);

        return $schema;
    }
}
