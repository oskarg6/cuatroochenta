<?php

namespace App\Application\Feature\ListSensor;

use App\Application\DTO\Sensor\SensorDTO;
use App\Domain\Entity\Sensor;

/**
 * SensorDTOAssemblerInterface
 */
interface SensorDTOAssemblerInterface
{
    /**
     * @param Sensor $sensor
     *
     * @return SensorDTO
     */
    public function create(Sensor $sensor): SensorDTO;
}
