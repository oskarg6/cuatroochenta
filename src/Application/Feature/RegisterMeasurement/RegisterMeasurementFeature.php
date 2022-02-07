<?php

namespace App\Application\Feature\RegisterMeasurement;

use App\Domain\Entity\Measurement;

class RegisterMeasurementFeature
{
    /**
     * @var CreateMeasurementServiceInterface
     */
    private $createMeasurementService;

    /**
     * @var MeasurementRepositoryInterface
     */
    private $measurementRepository;

    /**
     * @param CreateMeasurementServiceInterface $createMeasurementService
     * @param MeasurementRepositoryInterface    $measurementRepository
     */
    public function __construct(CreateMeasurementServiceInterface $createMeasurementService, MeasurementRepositoryInterface $measurementRepository)
    {
        $this->createMeasurementService = $createMeasurementService;
        $this->measurementRepository = $measurementRepository;
    }

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
    public function register(int $year, string $type, string $color, string $variety, float $temperature, float $graduation, float $ph, string $observations, string $wine): Measurement
    {
        $measurement = $this->createMeasurementService->create(
            $year,
            $type,
            $color,
            $variety,
            $temperature,
            $graduation,
            $ph,
            $observations,
            $wine
        );

        $this->measurementRepository->save($measurement);

        return $measurement;
    }

}