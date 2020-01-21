<?php

use App\Controller\AnimalController;
use Slim\Factory\AppFactory;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

$app = AppFactory::create();


$app->get('/', function (Request $request, Response $response, $args) {
    $response->getBody()->write('Bem vindo a API v1.');
    return $response;
});

$app->get('/animal', AnimalController::class . ':teste');


$app->run();