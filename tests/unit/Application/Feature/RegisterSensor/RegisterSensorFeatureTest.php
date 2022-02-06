<?php

namespace App\Tests\unit\Application\Feature\RegisterSensor;

use App\Application\Feature\RegisterSensor\CreateSensorServiceInterface;
use App\Application\Feature\RegisterSensor\NotExistsSensorTypeException;
use App\Application\Feature\RegisterSensor\RegisterSensorFeature;
use App\Application\Feature\RegisterSensor\SensorRepositoryInterface;
use App\Application\Feature\RegisterSensor\SensorTypeRepositoryInterface;
use App\Domain\Entity\Sensor;
use App\Domain\Entity\SensorType;
use Codeception\Test\Unit;
use Mockery;

/**
 * RegisterSensorFeatureTest
 */
class RegisterSensorFeatureTest extends Unit
{
    private $createSensorService;
    private $sensorRepository;
    private $sensorTypeRepository;

    protected function _before()
    {
        $sensor = Mockery::mock(Sensor::class);
        $this->createSensorService = Mockery::mock(CreateSensorServiceInterface::class);
        $this->createSensorService->shouldReceive('create')->andReturn($sensor);

        $this->sensorRepository = Mockery::mock(SensorRepositoryInterface::class);
        $this->sensorRepository->shouldReceive('save');

        $this->sensorTypeRepository = Mockery::mock(SensorTypeRepositoryInterface::class);
    }

    public function testRegister()
    {
        $sensorType = Mockery::mock(SensorType::class);
        $this->sensorTypeRepository->shouldReceive('findById')->andReturn($sensorType);

        $feature = new RegisterSensorFeature(
            $this->createSensorService,
            $this->sensorRepository,
            $this->sensorTypeRepository
        );

        $result = $feature->register(
            'name',
            0.1,
            1
        );

        $this->assertInstanceOf(Sensor::class, $result);
    }

    public function testRegisterException()
    {
        $this->sensorTypeRepository->shouldReceive('findById')->andReturn(null);

        $feature = new RegisterSensorFeature(
            $this->createSensorService,
            $this->sensorRepository,
            $this->sensorTypeRepository
        );

        try {
            $result = $feature->register(
                'name',
                0.1,
                1
            );

            $this->fail('exception not thrown');
        } catch (NotExistsSensorTypeException $exception) {
            $this->assertInstanceOf(NotExistsSensorTypeException::class, $exception);
        }

    }
}