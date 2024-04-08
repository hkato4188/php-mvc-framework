<?php

//run server php -S localhost:port
require_once __DIR__ . '/vendor/autoload.php';

use app\core\Application;

$app = new Application();


$app->router->get('/', function () {
    return 'Hello world';
});

$app->router->get('/contact', function () {
    return 'Contact page';
});

$app->router->get('/test', function () {
    return 'the test works';
});

$app->run();
