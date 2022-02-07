<?php

namespace App\Tests\unit\Application\Service;

use App\Application\Service\CreateMeasurement\CreateMeasurementService;
use App\Domain\Entity\Measurement;
use Codeception\Test\Unit;

class CreateMeasurementServiceTest extends Unit
{
    public function testCreate()
    {
        $service = new CreateMeasurementService();

        $result = $service->create(
            1991,
            'type',
            'color',
            'variety',
            1.1,
            1.1,
            1.1,
            'observations',
            'wine'
        );

        $this->assertInstanceOf(Measurement::class, $result);
    }
}