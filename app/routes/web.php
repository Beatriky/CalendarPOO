<?php

use Laminas\Diactoros\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

global $router;
$router = new League\Route\Router;

$router->map('GET', '/', function (ServerRequestInterface $request): ResponseInterface {
    $response = new Response;

    $response->getBody()->write('<h3>Hello, World!</h3>');

    return $response;
});

