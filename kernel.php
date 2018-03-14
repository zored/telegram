<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use Dotenv\Dotenv;

(function () {
    require __DIR__ . '/vendor/autoload.php';
    AnnotationRegistry::registerLoader('class_exists');
    (new Dotenv(__DIR__))->load();
})();
