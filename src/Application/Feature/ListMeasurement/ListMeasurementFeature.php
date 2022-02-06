<?php
namespace App\Application\Feature\ListMeasurement;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * ListMeasurementFeature
 */
class ListMeasurementFeature
{
    /**
     * @var MeasurementRepositoryInterface
     */
    private $measurementRepository;

    /**
     * @var MeasurementDTOAssemblerInterface
     */
    private $measurementDTOAssembler;

    /**
     * @param MeasurementRepositoryInterface   $measurementRepository
     * @param MeasurementDTOAssemblerInterface $measurementDTOAssembler
     */
    public function __construct(MeasurementRepositoryInterface $measurementRepository, MeasurementDTOAssemblerInterface $measurementDTOAssembler)
    {
        $this->measurementRepository = $measurementRepository;
        $this->measurementDTOAssembler = $measurementDTOAssembler;
    }

    /**
     * @return array
     */
    public function listAll(): array
    {
        $measurementList = $this->measurementRepository->getAll();

        $response = [];
        foreach ($measurementList as $measurement) {
            $response[] = $this->measurementDTOAssembler->create($measurement);
        }

        return $response;
    }
}
