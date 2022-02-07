<?php

namespace App\Application\Feature\RegisterMeasurement;

use App\Domain\Entity\Measurement;

/**
 * MeasurementRepositoryInterface
 */
interface MeasurementRepositoryInterface
{
    /**
     * @param Measurement $measurement
     */
    public function save(Measurement $measurement): void;
}
