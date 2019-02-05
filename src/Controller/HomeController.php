<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class HomeController
{
    private $twig;

    public function __construct($twig)
    {
        $this->twig = $twig;
    }


    public function index(): Response
    {
        return new Response($this->twig->render('pages/home_page.html.twig'));
    }
}