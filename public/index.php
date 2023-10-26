<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

$BASE_DIR = __DIR__ . '/../';
require $BASE_DIR . 'config/init.php';


$app->get('/', function (Request $requests, Response $response, $args) {
    $response->getBody()->write("Hello world!");
    return $response;
});

$app->get('/todos', function (Request $request, Response $response, $args) {
    $todos = Todos::all();
    $newResponse = $response->withJson($todos);
    return $newResponse;
});


$errorMiddleware = $app->addErrorMiddleware($config['settings']['debug'], true, true);
$app->run();
