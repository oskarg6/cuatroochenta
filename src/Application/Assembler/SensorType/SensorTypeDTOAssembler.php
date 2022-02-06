<?php

namespace App\Application\Assembler\SensorType;

use App\Application\DTO\SensorType\SensorTypeDTO;
use App\Application\Feature\ListSensorType\SensorTypeDTOAssemblerInterface as ListSensorTypeFeature;
use App\Domain\Entity\SensorType;

/**
 * SensorTypeDTOAssembler
 */
class SensorTypeDTOAssembler implements ListSensorTypeFeature
{
    /**
     * @param SensorType $sensorType
     *
     * @return SensorTypeDTO
     */
    public function create(SensorType $sensorType): SensorTypeDTO
    {
        return new SensorTypeDTO(
            $sensorType->getId(),
            $sensorType->getName()
        );
    }
}