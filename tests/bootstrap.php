<?php

use Doctrine\Common\Annotations\AnnotationRegistry;

(function () {
    $loader = require __DIR__ . '/../vendor/autoload.php';
    $loader->add('Zored\Telegram\Tests', __DIR__);
    $loader->add('Zored\Telegram', __DIR__.'/../src');

    AnnotationRegistry::registerLoader('class_exists');
})();
