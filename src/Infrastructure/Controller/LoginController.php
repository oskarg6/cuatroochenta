<?php

namespace App\Infrastructure\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class LoginController extends AbstractController
{
    public function index(): Response
    {
        return $this->render('login/index.html.twig');
    }

    public function login(): Response
    {
        return $this->render('login/index.html.twig');
    }
}