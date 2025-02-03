<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController{
    #[Route(path:'/')]
    public function home() {
        return new Response(content:'Hola caracola');

    } 
}