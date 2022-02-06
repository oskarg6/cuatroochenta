<?php

namespace App\Application\DTO\Sensor;

class SensorDTO
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var float
     */
    private $value;

    /**
     * @var string
     */
    private $sensorTypeName;

    /**
     * @param int    $id
     * @param string $name
     * @param float  $value
     * @param string $sensorTypeName
     */
    public function __construct(int $id, string $name, float $value, string $sensorTypeName)
    {
        $this->id = $id;
        $this->name = $name;
        $this->value = $value;
        $this->sensorTypeName = $sensorTypeName;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return float
     */
    public function getValue(): float
    {
        return $this->value;
    }

    /**
     * @return string
     */
    public function getSensorTypeName(): string
    {
        return $this->sensorTypeName;
    }
}
