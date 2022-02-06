<?php

namespace App\Infrastructure\Controller\Api;

use App\Application\Feature\ListSensor\ListSensorFeature;
use App\Infrastructure\Helper\SerializerHelper;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * ListSensorController
 */
class ListSensorController extends AbstractController
{
    /**
     * @var ListSensorFeature
     */
    private $listSensorFeature;

    /**
     * @param ListSensorFeature $listSensorFeature
     */
    public function __construct(ListSensorFeature $listSensorFeature)
    {
        $this->listSensorFeature = $listSensorFeature;
    }

    /**
     * @return JsonResponse
     */
    public function list(): JsonResponse
    {
        $sensorList = $this->listSensorFeature->listAll();

        return JsonResponse::fromJsonString(SerializerHelper::serialize($sensorList), 200);
    }
}
