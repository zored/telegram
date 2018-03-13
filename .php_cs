<?php

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

return Config::create()
    ->setRules([
        '@Symfony' => true,
        'concat_space' => ['spacing' => 'one'],
        'array_syntax' => ['syntax' => 'short'],
        'no_unused_imports' => true,
        'phpdoc_align' => false,
        'phpdoc_to_comment' => false,
        'header_comment' => false,
        'ordered_imports' => true,
    ])
    ->setFinder(
        Finder::create()->in([
            __DIR__ . '/src',
            __DIR__ . '/tests'
        ])
    );
