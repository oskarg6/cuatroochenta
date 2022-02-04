<?php

namespace App\Infrastructure\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

/**
 * MeasurementController
 */
class MeasurementController extends AbstractController
{
    public function list(): Response
    {
        return $this->render('measurement/list.html.twig');
    }
}
