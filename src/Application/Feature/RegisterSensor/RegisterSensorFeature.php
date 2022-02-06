<?php

namespace App\Application\Feature\RegisterSensor;

use App\Domain\Entity\Sensor;

class RegisterSensorFeature
{
    /**
     * @var CreateSensorServiceInterface
     */
    private $createSensorService;

    /**
     * @var SensorRepositoryInterface
     */
    private $sensorRepository;

    /**
     * @var SensorTypeRepositoryInterface
     */
    private $sensorTypeRepository;

    /**
     * @param CreateSensorServiceInterface $createSensorService
     * @param SensorRepositoryInterface $sensorRepository
     * @param SensorTypeRepositoryInterface $sensorTypeRepository
     */
    public function __construct(CreateSensorServiceInterface $createSensorService, SensorRepositoryInterface $sensorRepository, SensorTypeRepositoryInterface $sensorTypeRepository)
    {
        $this->createSensorService = $createSensorService;
        $this->sensorRepository = $sensorRepository;
        $this->sensorTypeRepository = $sensorTypeRepository;
    }

    /**
     * @param string $name
     * @param float  $value
     * @param int    $sensorTypeId
     *
     * @return Sensor
     * @throws NotExistsSensorTypeException
     */
    public function register(string $name, float $value, int $sensorTypeId): Sensor
    {
        $sensorType = $this->sensorTypeRepository->findById($sensorTypeId);

        if (empty($sensorType)) {
            throw new NotExistsSensorTypeException($sensorTypeId);
        }

        $sensor = $this->createSensorService->create(
            $name,
            $value,
            $sensorType
        );

        $this->sensorRepository->save($sensor);

        return $sensor;
    }
}
