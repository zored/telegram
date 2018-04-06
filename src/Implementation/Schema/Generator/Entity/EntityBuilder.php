<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\Entity;

use Zored\Telegram\Implementation\Schema\Entity\Constructor;
use Zored\Telegram\Implementation\Schema\Entity\EntityInterface;
use Zored\Telegram\Implementation\Schema\Entity\Parameter;
use Zored\Telegram\Implementation\Schema\Entity\Type;
use function preg_split;

final class EntityBuilder implements EntityBuilderInterface
{
    /**
     * @var EntityInterface[]
     */
    private $entities = [];

    /**
     * {@inheritDoc}
     * @param Constructor[] $constructors
     */
    public function build(array $constructors): array
    {
        $this->entities = [];
        foreach ($constructors as $constructor) {
            $this->setParent($constructor);
            $this->entities[$constructor->getName()] = $constructor;
        }
        $this->fillParameters($constructors);

        return $this->entities;
    }

    /**
     * @param Constructor[] $constructors
     * @param EntityInterface[] $entities
     */
    private function fillParameters(array $constructors): void
    {
        foreach ($constructors as $constructor) {
            foreach ($constructor->getParameters() as $parameter) {
                $this->setParameterType($parameter);
            }
        }
    }

    private function setParameterType(Parameter $parameter): void
    {
        $type = $this->getType($parameter->getTypeName());
        $parameter->setType($type);
    }

    private function getType(string $name): EntityInterface
    {
        return $this->entities[$name] = $this->entities[$name] ?? (new Type())
                ->setRelativeName(Type::createRelativeName($name))
                ->setName($name);
    }

    private function setParent(Constructor $constructor): void
    {
        $parent = $this->getType($constructor->getTypeName());
        $constructor->setParent($parent);
        $parent->setChild($constructor);
        $this->entities[$constructor->getTypeName()] = $parent;
    }
}
