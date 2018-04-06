<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver;

use Zored\Telegram\Implementation\Schema\Entity\Constructor;
use Zored\Telegram\Implementation\Schema\Entity\EntityInterface;
use Zored\Telegram\Implementation\Schema\Entity\Method;
use Zored\Telegram\Implementation\Schema\Entity\Type;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Exception\EntitySaverException;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Internal\InternalEntityChecker;
use Zored\Telegram\Implementation\Schema\Generator\FileSaver\Internal\InternalEntityCheckerInterface;

class EntitySaver implements EntitySaverInterface
{
    public const FILE_START = <<<'PHP'
<?php

declare(strict_types=1);


PHP;

    /**
     * @var ConstructorSaver
     */
    private $constructorSaver;

    /**
     * @var InternalEntityChecker
     */
    private $skipChecker;

    /**
     * @var TypeSaver
     */
    private $typeSaver;

    /**
     * @var MethodSaver
     */
    private $methodSaver;

    public function __construct(
        ConstructorSaver $constructorSaver = null,
        TypeSaver $typeSaver = null,
        MethodSaver $methodSaver = null,
        InternalEntityCheckerInterface $entityChecker = null
    ) {
        $this->constructorSaver = $constructorSaver ?? new ConstructorSaver();
        $this->skipChecker = $entityChecker ?? new InternalEntityChecker();
        $this->typeSaver = $typeSaver ?? new TypeSaver();
        $this->methodSaver = $methodSaver ?? new MethodSaver();
    }

    public function save(EntityInterface $entity): void
    {
        if ($this->skipChecker->isInternal($entity)) {
            return;
        }

        switch (true) {
            case $entity instanceof Constructor:
                $this->constructorSaver->save($entity);

                return;
            case $entity instanceof Type:
                $this->typeSaver->save($entity);

                return;
            case $entity instanceof Method:
                $this->methodSaver->save($entity);

                return;
        }

        throw EntitySaverException::bacauseNoSaverForEntity($entity);
    }
}
