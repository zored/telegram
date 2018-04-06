<?php

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver;

use Zored\Telegram\Implementation\Schema\Parameter;
use Zored\Telegram\Implementation\Schema\Type\AbstractClassType;
use Zored\Telegram\Implementation\Schema\Type\BaseType;
use Zored\Telegram\Implementation\Schema\Type\ClassType;
use Zored\Telegram\Implementation\Schema\Type\InterfaceType;
use Zored\Telegram\Implementation\Schema\Type\TypeInterface;
use const DIRECTORY_SEPARATOR;
use function file_put_contents;
use function mkdir;
use function preg_split;

final class OldSaver
{
    private const CLASS_GLUE = '\\';

    /**
     * @var string[]
     */
    private $namespacePathParts;

    /**
     * @var string[]
     */
    private $namespaceParts;

    public function __construct(
        string $namespace = Types::class,
        string $namespacePath = __DIR__ . '/../../Types'
    )
    {
        $this->namespaceParts = explode('/', $namespace);
        $this->namespacePathParts = explode(self::CLASS_GLUE, $namespacePath);
    }

    public function save(AbstractClassType $type): void
    {
        $path = $this->getClassPath($type);
        $name = $type->getName();

        $classParts = $type->getClassParts();
        $shortClass = array_pop($classParts);
        $namespace = implode(self::CLASS_GLUE, array_merge($this->namespaceParts, $classParts));

        $items = [];
        if ($type instanceof ClassType) {
            $id = '0x' . dechex($type->getId());
            $items = array_merge($items, [
                "public const ID = $id;",
            ], $this->getProperties($type), $this->getMethods($type));
            $parent = $type->getParent();
            if ($type->getClassParts() != $parent->getClassParts()) {
                $shortClass .= ' ' . ($parent instanceof InterfaceType ? 'implements' : 'extends') . ' ' . $this->getFullClassName($parent);
            }
        }

        $identifier = $type->getIdentifier();

        $items = implode(PHP_EOL . PHP_EOL, $items);
        $class = <<<PHP
<?php

namespace $namespace;

/**
 * @link https://core.telegram.org/constructor/$name
 */
$identifier $shortClass {
    $items
}
PHP;

        file_put_contents($path, $class);
    }

    private function getClassPath(AbstractClassType $type): string
    {
        $classParts = $type->getClassParts();
        $fileName = array_pop($classParts) . '.php';
        $directory = implode(DIRECTORY_SEPARATOR, array_merge($this->namespacePathParts, $classParts));

        if (!is_dir($directory)) {
            mkdir($directory, 0777, true);
            $directory = realpath($directory);
        }

        return $directory . DIRECTORY_SEPARATOR . $fileName;
    }

    private function createProperty(Parameter $parameter): string
    {
        $type = $this->getReturnType($parameter->getType());
        $name = $parameter->getName();

        return <<<PHP
    /**
     * @var $type
     */
    private \$$name;
PHP;
    }

    private function createAccessors(string $name, string $type, bool $isArray): array
    {
        $typeAnnotation = $type;
        if ($isArray) {
            $type = 'array';
            $typeAnnotation .= '[]';
        }

        $accessor = $this->getAccessor($name);

        return [<<<PHP
    /**
     * @return $typeAnnotation
     */
    public function get$accessor(): $type
    {
        return \$this->$name;
    }
PHP
            ,
            <<<PHP
    public function set$accessor($type \$$name): self
    {
        \$this->$name = \$$name;
        return \$this;
    }
PHP
            ,
        ];
    }

    private function getProperties(ClassType $type): array
    {
        $items = [];
        foreach ($type->getParameters() as $parameter) {
            $items[] = $this->createProperty($parameter);
        }

        return $items;
    }

    private function getMethods(ClassType $type): array
    {
        $items = [];
        $toArray = '';
        foreach ($type->getParameters() as $parameter) {
            $type = $this->getReturnType($parameter->getType());
            $name = $parameter->getName();
            $accessor = $this->getAccessor($name);
            $items = array_merge($items, $this->createAccessors($name, $type, $parameter->isArray()));
            $toArray .= <<<PHP

            '$name' => \$this->get$accessor(),
PHP;
        }
        $items[] = <<<PHP
    public function toArray(): array
    {
        return [$toArray
        ];
    }
PHP;

        return $items;
    }

    private function getReturnType(TypeInterface $type): string
    {
        if ($type instanceof BaseType) {
            return $type->getName();
        }

        if ($type instanceof AbstractClassType) {
            return $this->getFullClassName($type);
        }

        return '';
    }


    private function getFullClassName(AbstractClassType $type): string
    {
        return self::CLASS_GLUE . implode(
                self::CLASS_GLUE,
                array_merge(
                    $this->namespaceParts,
                    $type->getClassParts()
                )
            );
    }

    private function getAccessor(string $name): string
    {
        return implode('', array_map('ucfirst', preg_split('/[^a-zA-Z0-9]+/', $name)));
    }
}
