<?php

namespace App\Application\Service\CreateSensor;

use App\Application\Feature\RegisterSensor\CreateSensorServiceInterface as RegisterSensorFeature;
use App\Domain\Entity\Sensor;
use App\Domain\Entity\SensorType;

/**
 * CreateSensorService
 */
class CreateSensorService implements RegisterSensorFeature
{
    /**
     * @param string     $name
     * @param float      $value
     * @param SensorType $sensorType
     *
     * @return Sensor
     */
    public function create(string $name, float $value, SensorType $sensorType): Sensor
    {
        $sensor = new Sensor();
        $sensor->setName($name);
        $sensor->setValue($value);
        $sensor->setSensorType($sensorType);

        return $sensor;
    }
}
