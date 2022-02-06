<?php

namespace App\Tests\unit\Application\Assembler\Measurement;

use App\Application\Assembler\Measurement\MeasurementDTOAssembler;
use App\Application\DTO\Measurement\MeasurementDTO;
use App\Domain\Entity\Measurement;
use Codeception\Test\Unit;
use Mockery;

class MeasurementDTOAssemblerTest extends Unit
{
    public function testCreate()
    {
        $measurement = Mockery::mock(Measurement::class);
        $measurement->shouldReceive('getId')->andReturn(1);
        $measurement->shouldReceive('getYear')->andReturn(1991);
        $measurement->shouldReceive('getType')->andReturn('type');
        $measurement->shouldReceive('getColor')->andReturn('color');
        $measurement->shouldReceive('getVariety')->andReturn('variety');
        $measurement->shouldReceive('getTemperature')->andReturn(0.0);
        $measurement->shouldReceive('getGraduation')->andReturn(0.0);
        $measurement->shouldReceive('getPh')->andReturn(0.0);
        $measurement->shouldReceive('getObservations')->andReturn('observations');
        $measurement->shouldReceive('getWine')->andReturn('wine');

        $assembler = new MeasurementDTOAssembler();
        $result = $assembler->create($measurement);

        $this->assertInstanceOf(MeasurementDTO::class, $result);
    }
}