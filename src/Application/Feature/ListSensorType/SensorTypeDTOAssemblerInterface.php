<?php

namespace App\Application\Feature\ListSensorType;

use App\Application\DTO\SensorType\SensorTypeDTO;
use App\Domain\Entity\SensorType;

/**
 * SensorTypeDTOAssemblerInterface
 */
interface SensorTypeDTOAssemblerInterface
{
    /**
     * @param SensorType $sensorType
     *
     * @return SensorTypeDTO
     */
    public function create(SensorType $sensorType): SensorTypeDTO;
}
