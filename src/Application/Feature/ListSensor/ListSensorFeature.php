<?php

namespace App\Application\Feature\ListSensor;

/**
 * ListSensorFeature
 */
class ListSensorFeature
{
    /**
     * @var SensorDTOAssemblerInterface
     */
    private $sensorDTOAssembler;

    /**
     * @var SensorRepositoryInterface
     */
    private $sensorRepository;

    /**
     * @param SensorDTOAssemblerInterface $sensorDTOAssembler
     * @param SensorRepositoryInterface   $sensorRepository
     */
    public function __construct(SensorDTOAssemblerInterface $sensorDTOAssembler, SensorRepositoryInterface $sensorRepository)
    {
        $this->sensorDTOAssembler = $sensorDTOAssembler;
        $this->sensorRepository = $sensorRepository;
    }

    /**
     * @return array
     */
    public function listAll(): array
    {
        $sensorList = $this->sensorRepository->getAll();

        $response = [];
        foreach ($sensorList as $sensor) {
            $response[] = $this->sensorDTOAssembler->create($sensor);
        }

        return $response;
    }
}
