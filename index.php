<?php

//run server php -S localhost:port
require_once __DIR__ . '/vendor/autoload.php';

use app\core\Application;

$app = new Application();

// $router = new Router();
// $app->userRouter($router);

$app->router->get('/', function () {
    return 'Hello world';
});



$app->run();
