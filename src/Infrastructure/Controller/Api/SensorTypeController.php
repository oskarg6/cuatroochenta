<?php

namespace App\Infrastructure\Controller\Api;

use App\Application\Feature\ListSensorType\ListSensorTypeFeature;
use App\Infrastructure\Helper\SerializerHelper;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * SensorTypeController
 */
class SensorTypeController extends AbstractController
{
    /**
     * @var ListSensorTypeFeature
     */
    private $listSensorTypeFeature;

    /**
     * @param ListSensorTypeFeature $listSensorTypeFeature
     */
    public function __construct(ListSensorTypeFeature $listSensorTypeFeature)
    {
        $this->listSensorTypeFeature = $listSensorTypeFeature;
    }

    public function list(): JsonResponse
    {
        $sensorTypeList = $this->listSensorTypeFeature->listAll();

        return JsonResponse::fromJsonString(SerializerHelper::serialize($sensorTypeList), 200);
    }
}
