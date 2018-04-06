<?php

declare(strict_types=1);

namespace Zored\Telegram\Implementation\Schema\Generator\FileSaver\Writer;

use League\Flysystem\FilesystemInterface;

final class FileWriter implements FileWriterInterface
{
    /**
     * @var FilesystemInterface
     */
    private $fileSystem;

    public function __construct(FilesystemInterface $fileSystem)
    {
        $this->fileSystem = $fileSystem;
    }

    public function rewrite(string $path, string $content): void
    {
        if ($this->fileSystem->has($path)) {
            $this->fileSystem->delete($path);
        }
        $this->fileSystem->write($path, $content);
    }
}
