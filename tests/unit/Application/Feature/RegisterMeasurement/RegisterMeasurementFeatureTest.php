<?php

namespace App\Tests\unit\Application\Feature\RegisterMeasurement;

use App\Application\Feature\RegisterMeasurement\MeasurementRepositoryInterface;
use App\Application\Feature\RegisterMeasurement\CreateMeasurementServiceInterface;
use App\Application\Feature\RegisterMeasurement\RegisterMeasurementFeature;
use App\Domain\Entity\Measurement;
use Codeception\Test\Unit;
use Mockery;

class RegisterMeasurementFeatureTest extends Unit
{
    private $createMeasurementService;
    private $measurementRepository;

    protected function _before()
    {
        $measurement = Mockery::mock(Measurement::class);
        $this->createMeasurementService = Mockery::mock(CreateMeasurementServiceInterface::class);
        $this->createMeasurementService->shouldReceive('create')->andReturn($measurement);

        $this->measurementRepository = Mockery::mock(MeasurementRepositoryInterface::class);
        $this->measurementRepository->shouldReceive('save');
    }

    public function testRegister()
    {
        $feature = new RegisterMeasurementFeature(
            $this->createMeasurementService,
            $this->measurementRepository
        );

        $result = $feature->register(
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