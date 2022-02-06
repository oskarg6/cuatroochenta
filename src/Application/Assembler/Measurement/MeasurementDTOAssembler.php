<?php
namespace App\Application\Assembler\Measurement;

use App\Application\DTO\Measurement\MeasurementDTO;
use App\Application\Feature\ListMeasurement\MeasurementDTOAssemblerInterface as ListMeasurementFeature;
use App\Domain\Entity\Measurement;

/**
 * MeasurementDTOAssembler
 */
class MeasurementDTOAssembler implements ListMeasurementFeature
{
    /**
     * @param Measurement $measurement
     *
     * @return MeasurementDTO
     */
    public function create(Measurement $measurement): MeasurementDTO
    {
        return new MeasurementDTO(
            $measurement->getId(),
            $measurement->getYear(),
            $measurement->getType(),
            $measurement->getColor(),
            $measurement->getVariety(),
            $measurement->getTemperature(),
            $measurement->getGraduation(),
            $measurement->getPh(),
            $measurement->getObservations(),
            $measurement->getWine()
        );
    }
}
