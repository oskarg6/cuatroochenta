<?php

namespace App\Application\Feature\ListMeasurement;

use App\Application\DTO\Measurement\MeasurementDTO;
use App\Domain\Entity\Measurement;

/**
 * MeasurementDTOAssemblerInterface
 */
interface MeasurementDTOAssemblerInterface
{
    /**
     * @param Measurement $measurement
     *
     * @return MeasurementDTO
     */
    public function create(Measurement $measurement): MeasurementDTO;
}