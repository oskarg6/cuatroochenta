<?php
namespace App\Infrastructure\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

/**
 * DefaultController
 */
class DefaultController extends AbstractController
{
    public function index(): Response
    {
        return $this->render('base.html.twig');
    }
}
