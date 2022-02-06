<?php
namespace App\Tests\unit\Application\Feature\ListMeasurement;

use App\Application\DTO\Measurement\MeasurementDTO;
use App\Application\Feature\ListMeasurement\ListMeasurementFeature;
use App\Application\Feature\ListMeasurement\MeasurementDTOAssemblerInterface;
use App\Application\Feature\ListMeasurement\MeasurementRepositoryInterface;
use App\Domain\Entity\Measurement;
use Codeception\Test\Unit;
use Mockery;

/**
 * ListMeasurementFeatureTest
 */
class ListMeasurementFeatureTest extends Unit
{
    private $measurementRepository;
    private $measurementDTOAssembler;

    protected function _before()
    {
        $measurement = Mockery::mock(Measurement::class);
        $this->measurementRepository = Mockery::mock(MeasurementRepositoryInterface::class);
        $this->measurementRepository->shouldReceive('getAll')->andReturn([$measurement]);

        $measurementDTO = Mockery::mock(MeasurementDTO::class);
        $this->measurementDTOAssembler = Mockery::mock(MeasurementDTOAssemblerInterface::class);
        $this->measurementDTOAssembler->shouldReceive('create')->andReturn($measurementDTO);
    }

    public function testListMeasurement()
    {
        $listMeasurementFeature = new ListMeasurementFeature($this->measurementRepository, $this->measurementDTOAssembler);

        $result = $listMeasurementFeature->listAll();

        $this->assertIsArray($result);
    }
}