<?php

declare(strict_types=1);

namespace App\Controllers;
namespace App\Controllers;

use App\Views\View;
use Laminas\Diactoros\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class HomeController
{

    public function __construct(protected View $view)
    {
    }

    public function index(ServerRequestInterface $request): ResponseInterface
    {
        $response = new Response;

        $response->getBody()->write('<h3>Hello, World!</h3>');

        return $response;

    }
}