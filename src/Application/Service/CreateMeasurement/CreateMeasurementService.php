<?php
namespace App\Application\Service\CreateMeasurement;

use App\Application\Feature\RegisterMeasurement\CreateMeasurementServiceInterface as RegisterMeasurementFeature;
use App\Domain\Entity\Measurement;

/**
 * CreateMeasurementService
 */
class CreateMeasurementService implements RegisterMeasurementFeature
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
    public function create(int $year, string $type, string $color, string $variety, float $temperature, float $graduation, float $ph, string $observations, string $wine): Measurement
    {
        $measurement = new Measurement();
        $measurement->setYear($year);
        $measurement->setType($type);
        $measurement->setColor($color);
        $measurement->setVariety($variety);
        $measurement->setTemperature($temperature);
        $measurement->setGraduation($graduation);
        $measurement->setPh($ph);
        $measurement->setObservations($observations);
        $measurement->setWine($wine);

        return $measurement;
    }
}
