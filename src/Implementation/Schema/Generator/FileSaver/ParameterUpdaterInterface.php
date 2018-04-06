<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver;

use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\PhpNamespace;
use Zored\Telegram\Implementation\Schema\Entity\EntityInterface;

interface ParameterUpdaterInterface
{
    public function addParameters(ClassType $class, array $parameters, PhpNamespace $namespace, EntityInterface $parent = null): void;
}
