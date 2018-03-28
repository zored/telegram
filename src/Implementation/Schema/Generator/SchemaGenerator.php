<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator;

final class SchemaGenerator
{
    /**
     * @var string
     */
    private $jsonSchemaPath;

    /**
     * @var TypesGeneratorInterface
     */
    private $typesGenerator;

    public function __construct(
        string $jsonSchemaPath = 'https://core.telegram.org/schema/json',
        TypesGeneratorInterface $typesGenerator = null
    ) {
        $this->jsonSchemaPath = $jsonSchemaPath;
        $this->typesGenerator = $typesGenerator ?? new TypesGenerator();
    }

    public function generate(): void
    {
        $data = $this->getData();
        $this->createTypes($data['constructors']);
        $this->createCommands($data['methods']);
    }

    private function createTypes(array $constructors): void
    {
        $this->typesGenerator->generate($constructors);
    }

    private function createCommands(array $methods): void
    {
    }

    private function getData(): array
    {
        return json_decode(file_get_contents($this->jsonSchemaPath), true);
    }
}
