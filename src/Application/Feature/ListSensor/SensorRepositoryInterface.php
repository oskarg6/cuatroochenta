<?php

namespace App\Application\Feature\ListSensor;

/**
 * SensorRepositoryInterface
 */
interface SensorRepositoryInterface
{
    /**
     * @return array
     */
    public function getAll(): array;
}
