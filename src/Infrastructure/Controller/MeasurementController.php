<?php

namespace App\Infrastructure\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

/**
 * MeasurementController
 */
class MeasurementController extends AbstractController
{
    /**
     * @return Response
     */
    public function listView(): Response
    {
        return $this->render('measurement/list.html.twig');
    }
}
