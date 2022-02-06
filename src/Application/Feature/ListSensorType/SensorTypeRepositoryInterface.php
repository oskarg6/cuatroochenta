<?php

namespace App\Application\Feature\ListSensorType;

/**
 * SensorTypeRepositoryInterface
 */
interface SensorTypeRepositoryInterface
{
    /**
     * @return array
     */
    public function getAll(): array;
}
