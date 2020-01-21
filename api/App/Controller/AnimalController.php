<?php

namespace App\Controller;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class AnimalController{

    public function teste(Request $request, Response $response, array $args): Response
    {
        $response->getBody()->write('Hello World');
        return $response;
    }


}
