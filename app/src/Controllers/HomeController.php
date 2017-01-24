<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

final class HomeController extends AbstractController{

    protected $view;
    protected $logger;


    public function __construct($view) {
        parent::__construct($view);

    }

    public function dispatch(Request $request, Response $response, $args) {

        return $this->view->render($response, 'homepage.html.twig');

    }
}