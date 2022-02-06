<?php

namespace App\Tests\unit\Application\Assembler\SensorType;

use App\Application\Assembler\SensorType\SensorTypeDTOAssembler;
use App\Application\DTO\SensorType\SensorTypeDTO;
use App\Domain\Entity\SensorType;
use Codeception\Test\Unit;
use Mockery;

class SnesorTypeDTOAssemblerTest extends Unit
{
    public function testCreate()
    {
        $sensorType = Mockery::mock(SensorType::class);
        $sensorType->shouldReceive('getId')->andReturn(1);
        $sensorType->shouldReceive('getName')->andReturn('name');

        $assembler = new SensorTypeDTOAssembler();
        $result = $assembler->create($sensorType);

        $this->assertInstanceOf(SensorTypeDTO::class, $result);
    }
}