<?php

namespace App\Infrastructure\Controller\Api;

use App\Application\Feature\RegisterMeasurement\RegisterMeasurementFeature;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * RegisterMeasurementController
 */
class RegisterMeasurementController extends AbstractController
{
    /**
     * @var RegisterMeasurementFeature
     */
    private $registerMeasurementFeature;

    /**
     * @param RegisterMeasurementFeature $registerMeasurementFeature
     */
    public function __construct(RegisterMeasurementFeature $registerMeasurementFeature)
    {
        $this->registerMeasurementFeature = $registerMeasurementFeature;
    }

    /**
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function register(Request $request): JsonResponse
    {
        $parameters = $request->toArray();
        $this->registerMeasurementFeature->register(
            $parameters['year'],
            $parameters['type'],
            $parameters['color'],
            $parameters['variety'],
            $parameters['temperature'],
            $parameters['graduation'],
            $parameters['ph'],
            $parameters['observations'],
            $parameters['wine'],
        );

        return JsonResponse::fromJsonString('', 200);
    }
}
