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
use function array_merge_recursive;

/**
 * Convert Telegram entities into PHP and save them into files.
 */
final class SchemaGenerator
{
    private const DEFAULT_SCHEMA_PATHS = [
        'https://core.telegram.org/schema/json',
        'https://core.telegram.org/schema/mtproto-json',
    ];

    /**
     * @var string[]
     */
    private $jsonSchemaPaths;

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
        array $jsonSchemaPaths = self::DEFAULT_SCHEMA_PATHS,
        SerializerInterface $serializer = null,
        EntityBuilderInterface $entityBuilder = null,
        EntitySaverInterface $entitySaver = null
    ) {
        $this->jsonSchemaPaths = $jsonSchemaPaths;
        $this->entityBuilder = $entityBuilder ?? new EntityBuilder();
        $this->entitySaver = $entitySaver ?? new EntitySaver();
        $this->serializer = $serializer ?? new JmsSerializer();
    }

    public function generate(): void
    {
        $schema = $this->deserializeSchema();
        $entities = $this->entityBuilder->build($schema);
        array_walk($entities, [$this, 'save']);
    }

    private function save(AbstractEntity $entity): void
    {
        $this->entitySaver->save($entity);
    }

    private function deserializeSchema(): Schema
    {
        $schemasData = [];
        foreach ($this->jsonSchemaPaths as $path) {
            $schemaData = json_decode(file_get_contents($path), true);
            $schemasData = array_merge_recursive($schemasData, $schemaData);
        }
        /** @var Schema $schema */
        $schema = $this->serializer->deserialize(Schema::class, $schemasData);

        return $schema;
    }
}
