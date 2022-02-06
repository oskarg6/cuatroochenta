<?php

namespace App\Application\Feature\RegisterSensor;

use App\Domain\Entity\Sensor;
use App\Domain\Entity\SensorType;

/**
 * CreateSensorServiceInterface
 */
interface CreateSensorServiceInterface
{
    /**
     * @param string     $name
     * @param float      $value
     * @param SensorType $sensorType
     *
     * @return Sensor
     */
    public function create(string $name, float $value, SensorType $sensorType): Sensor;
}
