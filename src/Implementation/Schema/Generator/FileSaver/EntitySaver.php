<?php

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver;

use Zored\Telegram\Implementation\Schema\Entity\Constructor;
use Zored\Telegram\Implementation\Schema\Entity\EntityInterface;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Internal\InternalEntityChecker;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Internal\InternalEntityCheckerInterface;

class EntitySaver implements EntitySaverInterface
{

    /**
     * @var ConstructorSaver
     */
    private $constructorSaver;

    /**
     * @var InternalEntityChecker
     */
    private $skipChecker;

    public function __construct(ConstructorSaver $constructorSaver = null, InternalEntityCheckerInterface $entityChecker = null)
    {
        $this->constructorSaver = $constructorSaver ?? new ConstructorSaver();
        $this->skipChecker = $entityChecker ?? new InternalEntityChecker();
    }

    public function save(EntityInterface $entity): void
    {
        // TODO: remove old files.
        if ($this->skipChecker->isInternal($entity)) {
            return;
        }

        switch (true) {
            case $entity instanceof Constructor:
                $this->constructorSaver->save($entity);
                return;
        }

        // TODO:
        // throw EntitySaverException::bacauseNoSaverForEntity($entity);
    }
}
