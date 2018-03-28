<?php

declare(strict_types=1);

namespace Zored\Telegram\Tests\Implementation;

use PHPUnit\Framework\TestCase;
use Zored\Telegram\Implementation\Schema\Generator\SchemaGenerator;

final class SchemaGeneratorTest extends TestCase
{
    /**
     * @var SchemaGenerator
     */
    private $generator;

    /**
     * @doesNotPerformAssertions
     */
    public function testGenerate(): void
    {
        $this->generator->generate();
    }

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        $this->generator = new SchemaGenerator();
    }
}
