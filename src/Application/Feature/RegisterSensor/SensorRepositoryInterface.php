<?php

namespace App\Application\Feature\RegisterSensor;

use App\Domain\Entity\Sensor;

/**
 * SensorRepositoryInterface
 */
interface SensorRepositoryInterface
{
    public function save(Sensor $sensor): void;
}
