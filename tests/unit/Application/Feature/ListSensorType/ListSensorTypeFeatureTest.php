<?php

namespace App\Tests\unit\Application\Feature\ListSensorType;

use App\Application\DTO\SensorType\SensorTypeDTO;
use App\Application\Feature\ListSensorType\ListSensorTypeFeature;
use App\Application\Feature\ListSensorType\SensorTypeDTOAssemblerInterface;
use App\Application\Feature\ListSensorType\SensorTypeRepositoryInterface;
use App\Domain\Entity\SensorType;
use Codeception\Test\Unit;
use Mockery;

class ListSensorTypeFeatureTest extends Unit
{
    private $sensorTypeAssembler;
    private $sensorTypeRepository;

    protected function _before()
    {
        $sensorTypeDTO = Mockery::mock(SensorTypeDTO::class);
        $this->sensorTypeAssembler = Mockery::mock(SensorTypeDTOAssemblerInterface::class);
        $this->sensorTypeAssembler->shouldReceive('create')->andReturn($sensorTypeDTO);

        $sensorType = Mockery::mock(SensorType::class);
        $this->sensorTypeRepository = Mockery::mock(SensorTypeRepositoryInterface::class);
        $this->sensorTypeRepository->shouldReceive('getAll')->andReturn([$sensorType]);
    }

    public function testListAll()
    {
        $feature = new ListSensorTypeFeature($this->sensorTypeAssembler, $this->sensorTypeRepository);

        $result = $feature->listAll();

        $this->assertIsArray($result);
    }
}