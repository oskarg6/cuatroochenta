<?php

namespace App\Application\Feature\ListSensorType;

/**
 * ListSensorTypeFeature
 */
class ListSensorTypeFeature
{
    /**
     * @var SensorTypeDTOAssemblerInterface
     */
    private $sensorTypeAssembler;

    /**
     * @var SensorTypeRepositoryInterface
     */
    private $sensorTypeRepository;

    /**
     * @param SensorTypeDTOAssemblerInterface $sensorTypeAssembler
     * @param SensorTypeRepositoryInterface   $sensorTypeRepository
     */
    public function __construct(SensorTypeDTOAssemblerInterface $sensorTypeAssembler, SensorTypeRepositoryInterface $sensorTypeRepository)
    {
        $this->sensorTypeAssembler = $sensorTypeAssembler;
        $this->sensorTypeRepository = $sensorTypeRepository;
    }

    /**
     * @return array
     */
    public function listAll(): array
    {
        $sensorTypeList = $this->sensorTypeRepository->getAll();

        $response = [];
        foreach ($sensorTypeList as $sensorType) {
            $response[] = $this->sensorTypeAssembler->create($sensorType);
        }

        return $response;
    }
}
