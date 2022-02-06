<?php

namespace App\Application\Assembler\Sensor;

use App\Application\DTO\Sensor\SensorDTO;
use App\Application\Feature\ListSensor\SensorDTOAssemblerInterface as ListSensorFeature;
use App\Domain\Entity\Sensor;

/**
 * SensorDTOAssembler
 */
class SensorDTOAssembler implements ListSensorFeature
{
    /**
     * @param Sensor $sensor
     *
     * @return SensorDTO
     */
    public function create(Sensor $sensor): SensorDTO
    {
        return new SensorDTO(
            $sensor->getId(),
            $sensor->getName(),
            $sensor->getValue(),
            $sensor->getSensorType()->getName()
        );
    }
}
