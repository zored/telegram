<?php

use Doctrine\Common\Annotations\AnnotationRegistry;

(function () {
    require __DIR__ . '/../vendor/danog/madelineproto/src/danog/MadelineProto/InternalDoc.php';
    $loader = require __DIR__ . '/../vendor/autoload.php';
    $loader->add('Zored\Telegram\Tests', __DIR__);
    $loader->add('Zored\Telegram', __DIR__ . '/../src');

    AnnotationRegistry::registerLoader('class_exists');
})();
