<?php

namespace App\Application\DTO\Measurement;

/**
 * MeasurementDTO
 */
class MeasurementDTO
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $year;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $color;

    /**
     * @var string
     */
    private $variety;

    /**
     * @var float
     */
    private $temperature;

    /**
     * @var float
     */
    private $graduation;

    /**
     * @var float
     */
    private $ph;

    /**
     * @var string
     */
    private $observations;

    /**
     * @var string
     */
    private $wine;

    public function __construct(int $id, int $year, string $type, string $color, string $variety, float $temperature, float $graduation, float $ph, string $observations, string $wine)
    {
        $this->id = $id;
        $this->year = $year;
        $this->type = $type;
        $this->color = $color;
        $this->variety = $variety;
        $this->temperature = $temperature;
        $this->graduation = $graduation;
        $this->ph =$ph;
        $this->observations = $observations;
        $this->wine = $wine;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getYear(): int
    {
        return $this->year;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @return string
     */
    public function getVariety(): string
    {
        return $this->variety;
    }

    /**
     * @return float
     */
    public function getTemperature(): float
    {
        return $this->temperature;
    }

    /**
     * @return float
     */
    public function getGraduation(): float
    {
        return $this->graduation;
    }

    /**
     * @return float
     */
    public function getPh(): float
    {
        return $this->ph;
    }

    /**
     * @return string
     */
    public function getObservations(): string
    {
        return $this->observations;
    }

    /**
     * @return string
     */
    public function getWine(): string
    {
        return $this->wine;
    }
}
