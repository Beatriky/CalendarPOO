<?php

use Laminas\Diactoros\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use App\Controllers\HomeController;

global $router;
$router = new League\Route\Router;

$router->get('/', [HomeController::class, 'index'])->setName('home');
//

//$router->map('GET', '/', function (ServerRequestInterface $request): ResponseInterface {
//    $response = new Response;
//
//    $response->getBody()->write('<h3>Hello, World!</h3>');
//
//    return $response;
//});
//
