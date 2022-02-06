<?php

namespace App\Tests\unit\Application\Assembler\Sensor;

use App\Application\Assembler\Sensor\SensorDTOAssembler;
use App\Application\DTO\Sensor\SensorDTO;
use App\Domain\Entity\Sensor;
use App\Domain\Entity\SensorType;
use Codeception\Test\Unit;
use Mockery;

/**
 * SensorDTOAssemblerTest
 */
class SensorDTOAssemblerTest extends Unit
{
    public function testCreate()
    {
        $sensorType = Mockery::mock(SensorType::class);
        $sensorType->shouldReceive('getName')->andReturn('sensor type name');
        $sensor = Mockery::mock(Sensor::class);
        $sensor->shouldReceive('getId')->andReturn(1);
        $sensor->shouldReceive('getName')->andReturn('name');
        $sensor->shouldReceive('getValue')->andReturn(1.1);
        $sensor->shouldReceive('getSensorType')->andReturn($sensorType);

        $assembler = new SensorDTOAssembler();
        $result = $assembler->create($sensor);

        $this->assertInstanceOf(SensorDTO::class, $result);
    }
}
