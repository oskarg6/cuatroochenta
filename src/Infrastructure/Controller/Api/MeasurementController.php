<?php

namespace App\Infrastructure\Controller\Api;

use App\Application\Feature\ListMeasurement\ListMeasurementFeature;
use App\Infrastructure\Helper\SerializerHelper;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * MeasurementController
 */
class MeasurementController extends AbstractController
{
    /**
     * @var ListMeasurementFeature
     */
    private $listMeasurementFeature;

    public function __construct(ListMeasurementFeature $listMeasurementFeature)
    {
        $this->listMeasurementFeature = $listMeasurementFeature;
    }

    public function list(): JsonResponse
    {
        $measurementList = $this->listMeasurementFeature->listAll();

        return JsonResponse::fromJsonString(SerializerHelper::serialize($measurementList), 200);
    }
}
