<?php

require __DIR__ . '/../vendor/autoload.php';

$app = new Silex\Application();

$app->get('/', function () {
    return 'Hola Mundo';    
});

$app->run();
