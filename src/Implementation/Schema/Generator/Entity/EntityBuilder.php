<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\Entity;

use Zored\Telegram\Implementation\Schema\Entity\Constructor;
use Zored\Telegram\Implementation\Schema\Entity\EntityInterface;
use Zored\Telegram\Implementation\Schema\Entity\Method;
use Zored\Telegram\Implementation\Schema\Entity\Parameter;
use Zored\Telegram\Implementation\Schema\Entity\Type;
use Zored\Telegram\Implementation\Schema\Schema;

/**
 * TODO: split.
 */
final class EntityBuilder implements EntityBuilderInterface
{
    /**
     * @var EntityInterface[]
     */
    private $entities = [];

    /**
     * {@inheritdoc}
     */
    public function build(Schema $schema): array
    {
        $this->entities = [];

        $this->updateConstructors($schema);
        $this->updateMethods($schema);

        return $this->entities;
    }

    /**
     * @param Constructor[]|Method[] $entities
     * @param EntityInterface[] $entities
     */
    private function updateParameters(array $entities): void
    {
        foreach ($entities as $entity) {
            foreach ($entity->getParameters() as $parameter) {
                $this->setParameterType($parameter);
            }
        }
    }

    private function setParameterType(Parameter $parameter): void
    {
        $type = $this->getOrCreateType($parameter->getTypeName());
        $parameter->setType($type);
    }

    private function getOrCreateType(string $name): EntityInterface
    {
        return $this->entities[$name] = $this->entities[$name] ?? (new Type())->setName($name);
    }

    private function setParent(Constructor $constructor): void
    {
        $parent = $this->getOrCreateType($constructor->getTypeName());
        $constructor->setParent($parent);
        $parent->setChild($constructor);
        $this->entities[$constructor->getTypeName()] = $parent;
    }

    /**
     * @param Schema $schema
     */
    private function updateConstructors(Schema $schema): void
    {
        $constructors = $schema->getConstructors();
        foreach ($constructors as $constructor) {
            $this->setParent($constructor);
            $this->entities[$constructor->getName()] = $constructor;
        }
        $this->updateParameters($constructors);
    }

    /**
     * @param Schema $schema
     */
    private function updateMethods(Schema $schema): void
    {
        $methods = $schema->getMethods();
        foreach ($methods as $method) {
            // Parameters:
            foreach ($method->getParameters() as $parameter) {
                $this->setParameterType($parameter);
            }

            // Return type:
            $returnType = $this->getOrCreateType($method->getReturnTypeName());
            $method->setReturnType($returnType);

            $this->entities[$method->getName()] = $method;
        }
        $this->updateParameters($methods);
    }
}
