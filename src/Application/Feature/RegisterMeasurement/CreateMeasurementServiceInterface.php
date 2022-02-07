<?php

namespace App\Application\Feature\RegisterMeasurement;

use App\Domain\Entity\Measurement;

/**
 * CreateMeasurementServiceInterface
 */
interface CreateMeasurementServiceInterface
{
    /**
     * @param int    $year
     * @param string $type
     * @param string $color
     * @param string $variety
     * @param float  $temperature
     * @param float  $graduation
     * @param float  $ph
     * @param string $observations
     * @param string $wine
     *
     * @return Measurement
     */
    public function create(int $year, string $type, string $color, string $variety, float $temperature, float $graduation, float $ph, string $observations, string $wine): Measurement;
}
