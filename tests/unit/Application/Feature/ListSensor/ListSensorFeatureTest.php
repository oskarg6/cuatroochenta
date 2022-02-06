<?php

namespace App\Tests\unit\Application\Feature\ListSensor;

use App\Application\DTO\Sensor\SensorDTO;
use App\Application\Feature\ListSensor\ListSensorFeature;
use App\Application\Feature\ListSensor\SensorDTOAssemblerInterface;
use App\Application\Feature\ListSensor\SensorRepositoryInterface;
use App\Domain\Entity\Sensor;
use Codeception\Test\Unit;
use Mockery;

class ListSensorFeatureTest extends Unit
{
    private $sensorDTOAssembler;
    private $sensorRepository;

    protected function _before()
    {
        $sensorDTO = Mockery::mock(SensorDTO::class);
        $this->sensorDTOAssembler = Mockery::mock(SensorDTOAssemblerInterface::class);
        $this->sensorDTOAssembler->shouldReceive('create')->andReturn($sensorDTO);

        $sensor = Mockery::mock(Sensor::class);
        $this->sensorRepository = Mockery::mock(SensorRepositoryInterface::class);
        $this->sensorRepository->shouldReceive('getAll')->andReturn([$sensor]);
    }

    public function testListAll()
    {
        $feature = new ListSensorFeature(
            $this->sensorDTOAssembler,
            $this->sensorRepository
        );

        $result = $feature->listAll();

        $this->assertIsArray($result);
    }
}
