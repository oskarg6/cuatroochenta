<?php

namespace App\Tests\unit\Application\Service;

use App\Application\Service\CreateSensor\CreateSensorService;
use App\Domain\Entity\Sensor;
use App\Domain\Entity\SensorType;
use Codeception\Test\Unit;
use Mockery;

class CreateSensorServiceTest extends Unit
{
    public function testCreate()
    {
        $sensorType = Mockery::mock(SensorType::class);

        $createSensorService = new CreateSensorService();

        $sensor = $createSensorService->create(
            'name',
            0.1,
            $sensorType
        );

        $this->assertInstanceOf(Sensor::class, $sensor);
    }
}