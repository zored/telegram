<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\ClassName;

final class ClassName
{
    private const GLUE = '\\';

    /**
     * @var string
     */
    private $namespace;

    /**
     * @var string
     */
    private $shortClass;

    private function __construct(string $namespace, string $shortClass)
    {
        $this->namespace = $namespace;
        $this->shortClass = $shortClass;
    }

    public static function fromParts(array $parts): self
    {
        $last = array_pop($parts);

        return new self(implode(self::GLUE, $parts), $last);
    }

    public static function fromFull(string $class): self
    {
        return self::fromParts(explode(self::GLUE, $class));
    }

    public function getNamespace(): string
    {
        return $this->namespace;
    }

    public function getShort(): string
    {
        return $this->shortClass;
    }

    public function getFull(): string
    {
        return $this->namespace . self::GLUE . $this->shortClass;
    }

    public function __toString(): string
    {
        return $this->getFull();
    }
}
