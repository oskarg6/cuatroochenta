<?php

namespace App\Application\Feature\RegisterSensor;

use App\Domain\Entity\SensorType;

/**
 * SensorTypeRepositoryInterface
 */
interface SensorTypeRepositoryInterface
{
    /**
     * @param int $id
     *
     * @return SensorType|null
     */
    public function findById(int $id): ?SensorType;
}
