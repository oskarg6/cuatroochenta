<?php

namespace App\Infrastructure\Controller\Api;

use App\Application\Feature\RegisterSensor\NotExistsSensorTypeException;
use App\Application\Feature\RegisterSensor\RegisterSensorFeature;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * RegisterSensorController
 */
class RegisterSensorController extends AbstractController
{
    /**
     * @var RegisterSensorFeature
     */
    private $registerSensorFeature;

    /**
     * @param RegisterSensorFeature $registerSensorFeature
     */
    public function __construct(RegisterSensorFeature $registerSensorFeature)
    {
        $this->registerSensorFeature = $registerSensorFeature;
    }

    public function register(Request $request): JsonResponse
    {
        $parameters = $request->toArray();
        try {
            $this->registerSensorFeature->register(
                $parameters['name'],
                $parameters['value'],
                $parameters['type']
            );
        } catch (NotExistsSensorTypeException $exception) {
            // nothig to do
        }

        return JsonResponse::fromJsonString('', 200);
    }
}
