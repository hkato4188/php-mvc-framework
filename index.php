<?php

//run server php -S localhost:port
require_once 'Application.php';


$app = new Application();

// $router = new Router();
// $app->userRouter($router);

$app->router->get('/', function () {
    return 'Hello world';
});



$app->run();
