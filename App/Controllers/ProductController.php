<?php 
namespace App\Controllers;

use App\DAO\MySql\GerenciadorDeLojas\LojasDAO;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
final class ProductController
{
    public function getProducts(Request $request, Response $response, array $args) : Response
    {
        $lojasDAO = new LojasDAO;
        $lojasDAO->teste();
        $response = $response->withJson(["message" => "Hello world"]);
        return $response;
    }
}
;?>