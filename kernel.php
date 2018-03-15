<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use Dotenv\Dotenv;

(function () {
    require __DIR__ . '/vendor/autoload.php';
    AnnotationRegistry::registerLoader('class_exists');
    if (file_exists(__DIR__ . DIRECTORY_SEPARATOR . '.env')) {
        (new Dotenv(__DIR__))->load();
    }
})();
