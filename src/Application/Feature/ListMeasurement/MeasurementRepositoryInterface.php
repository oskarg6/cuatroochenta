<?php
namespace App\Application\Feature\ListMeasurement;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * MeasurementRepositoryInterface
 */
interface MeasurementRepositoryInterface
{
    /**
     * @return array
     */
    public function getAll(): array;
}
